var scrollingImages = document.querySelector('.image');
	var images = scrollingImages.querySelectorAll('img');
	var imageIndex = 0;
	var imageWidth = images[0].width;

	setInterval(fonction(){
		imageIndex++;
		if (imageIndex >= images.lenght) {
			imageIndex = 0;
		}
		var newScrollLeft = imageIndex * imageWidth;
		scrollingImages.newScrollLeft = newScrollLeft;
	}, 3000);