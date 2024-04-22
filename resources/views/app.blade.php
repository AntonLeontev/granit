<!DOCTYPE html>
<html>

<head>
	<title>Гранит-Электрон</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @routes
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @inertiaHead
</head>

<body>
    @inertia

	<script>
		document.onselectstart = () => false;
		document.ondblclick = () => false;
		document.oncontextmenu = () => false;
		document.addEventListener('touchmove', e => {
			if (e.touches.length > 1) {
				e.preventDefault()
			}
		}, {passive: false});
		document.addEventListener("wheel", function(e) {
			if (e.ctrlKey) {
				e.preventDefault();
			}
		}, {passive: false});
	</script>
</body>

</html>
