function toggle_img(image,first,second) {
  rex1 = new RegExp(first);

  if (rex1.test(image.src)) {
    image.src=second;
  } else {
    image.src=first;
  }
}
