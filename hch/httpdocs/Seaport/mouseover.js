

<!--
if (document.images) {


galleryon = new Image(143, 39);
galleryon.src = "picts/galleryon.gif"

galleryoff = new Image(143, 39);
galleryoff.src = "picts/galleryoff.gif"




nexton = new Image(100, 40);
nexton.src = "picts/nexton.gif"

nextoff = new Image(100, 40);
nextoff.src = "picts/nextoff.gif"




}

function img_act(imgName) {
if (document.images) {
imgOn = eval(imgName + "on.src");
document [imgName].src = imgOn;
}
}

function img_inact(imgName) {
if (document.images) {
imgOff = eval(imgName + "off.src");
document [imgName].src = imgOff;
}
}