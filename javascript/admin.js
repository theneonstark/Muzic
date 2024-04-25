let image = document.getElementById("Image"),
  song = document.getElementById("Music");

let imageTxt = document.getElementById("image_detail"),
  songtxt = document.getElementById("song_detail");
// console.log(image,song);

song = onchange = () => {
  let inputImage = document.getElementById("Image").files[0];
  imageTxt.innerText = inputImage.name;
  let inputSong = document.getElementById("Music").files[0];
  songtxt.innerText = inputSong.name;
};