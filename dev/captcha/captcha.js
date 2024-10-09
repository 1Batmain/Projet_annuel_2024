const askimage = 
{
	bras: [
		'/dev/captcha/img/bras/bras1.jpg', '/dev/captcha/img/bras/bras2.jpg', '/dev/captcha/img/bras/bras3.jpg', '/dev/captcha/img/bras/bras4.jpg', 
	],
	jambes: [
		'/dev/captcha/img/jambes/jambes1.webp', '/dev/captcha/img/jambes/jambes2.webp', '/dev/captcha/img/jambes/jambes3.jpg', '/dev/captcha/img/jambes/jambes4.png', '/dev/captcha/img/jambes/jambes5.jpeg', '/dev/captcha/img/jambes/jambes6.jpg'
	],
	tronc: [
		'/dev/captcha/img/tronc/tronc1.jpg', '/dev/captcha/img/tronc/tronc2.jpg', '/dev/captcha/img/tronc/tronc3.jpg', '/dev/captcha/img/tronc/tronc4.jpg', '/dev/captcha/img/tronc/tronc5.jpeg', '/dev/captcha/img/tronc/tronc6.jpg'
	],
	tete: [
		'/dev/captcha/img/tete/tete1.webp'
	]
};

function getImageAleatoire()
{
	// choix d'une partie du corp random
	const bodyPart = Object.keys(askimage);
	const rndPartChoice = bodyPart[Math.floor(Math.random() * bodyPart.length)];

	// choix d'une image de cette partie du corp
	const imagesAvailable = askimage[rndPartChoice];
	const rndImageChoice = imagesAvailable[Math.floor(Math.random() * imagesAvailable.length)];

	return rndImageChoice;
}

const askImageElement = document.getElementById("askimage");

function afficherImageAleatoire()
{
	const imageAleatoire = getImageAleatoire();
	askImageElement.src = imageAleatoire;
}

afficherImageAleatoire();

const canva = document.getElementById("captcha")
const ctx = canva.getContext('2d')

const body = new Image();
body.src = "/dev/captcha/img/human_body.jpg";

// Affice l'image de la silhouette une fois qu'elle est chargée et modifie
// son apparence pour effacer le fond et changer sa couleur en vert
let bodyImageData = null;
let bodyData = null;

body.onload = function()
{
	ctx.drawImage(body, 0, 0, canva.width, canva.height);
	body.style.display = "none";
	bodyImageData = ctx.getImageData(0, 0, canva.width, canva.height);
	bodyData = bodyImageData.data;
	for (let i = 0; i < bodyData.length; i += 4)
	{
		let color = bodyData[i] + bodyData[i + 1] + bodyData[i + 2];
		if (color > 600) 
		{
			bodyData[i] = 255;
			bodyData[i + 1] = 255;
			bodyData[i + 2] = 255;
		}
		else 
		{	
			bodyData[i+1] += 155
			bodyData[i+3] -= 100
		}
	}
	 ctx.putImageData(bodyImageData, 0, 0)	
};

// Définition des parties du corps
const zones =
{
	brasGauche:	{x: 120, y: 95, width: 50, height: 140},
	brasDroit:	{x: 230, y: 95, width: 50, height: 140},
	jambes:		{x: 170, y: 185, width: 60, height: 175},
	tronc:		{x: 170, y: 85, width: 60, height: 100},
	tete:		{x: 180, y: 40, width: 40, height: 45}
};

let zoneDetectee = null;

canva.addEventListener("mousemove", function(event)
{
	const	rect	= canva.getBoundingClientRect();
	const	x		= event.clientX - rect.left;
	const	y		= event.clientY - rect.top;

	zoneDetectee = detectZone(x, y);

	ctx.clearRect(0, 0, canva.width, canva.height);
	ctx.putImageData(bodyImageData, 0, 0)	

	if (zoneDetectee)
	{
		highlight(zones[zoneDetectee]);
	}
});

canva.addEventListener("click", function()
{
	if (zoneDetectee)
	{
		if (askImageElement.src.includes(zoneDetectee)|| ((zoneDetectee == 'brasGauche' || zoneDetectee == 'brasDroit') && askImageElement.src.includes('bras')))
		{
			document.querySelectorAll(".result_captcha").forEach(function(c){
				c.value="true";
			});
			closeCaptcha();
		}
		else
			alert('NON');
			afficherImageAleatoire();
	}
});

function highlight(obj)
{
	let obgImageData	= ctx.getImageData(obj.x, obj.y, obj.width, obj.height);
	let objData			= obgImageData.data;

	for (let i = 0; i < objData.length; i += 4)
	{
		objData[i+3] += 100;
	}
	ctx.putImageData(obgImageData, obj.x, obj.y);

	if(obj == zones.brasGauche || obj == zones.brasDroit)
	{
		let obj2 = null;
		if (obj == zones.brasGauche)
		{
			obj2 = zones.brasDroit;
		}
		else 
		{
			obj2 = zones.brasGauche;
		}
	let obgImageData2	= ctx.getImageData(obj2.x, obj2.y, obj2.width, obj2.height);
	let objData2		= obgImageData2.data;

	for (let i = 0; i < objData2.length; i += 4)
	{
		objData2[i+3] += 100;
	}
	ctx.putImageData(obgImageData2, obj2.x, obj2.y);
	}

}

function detectZone(x, y)
{
 	for (const zone in zones)
	{
		if (x >= zones[zone].x && x <= zones[zone].x + zones[zone].width && y >= zones[zone].y && y <= zones[zone].y + zones[zone].height)
		{
			return zone;
		}
	}
	return null;
};
