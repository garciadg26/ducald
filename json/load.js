var container = document.getElementById('build');
 var state = 'toggle';

   var animation = bodymovin.loadAnimation({
 	container: container,
 	renderer: 'svg',
 	loop: false,
 	autoplay: true,
 	//animationData: jsonFromAfterEffects,
     path: 'json/ducald.json'
 })