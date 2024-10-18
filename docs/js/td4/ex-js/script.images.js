const imageSelector = document.getElementById("imageSelector");
const displayImage = document.getElementById("displayImage");

imageSelector.addEventListener("change", function () {
  const selectedValue = imageSelector.value;

  if (selectedValue === "image1") {
    displayImage.src = "chat.png";
    displayImage.style.display = "block";
  } else if (selectedValue === "image2") {
    displayImage.src = "chien.png";
    displayImage.style.display = "block";
  } else if (selectedValue === "image3") {
    displayImage.src = "lapin.png";
    displayImage.style.display = "block";
  } else {
    displayImage.style.display = "none";
  }
});
