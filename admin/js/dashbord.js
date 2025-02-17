
const sliderBtn = document.getElementById('sliderBtn');
const newsBtn = document.getElementById('newsBtn');
const marqueeBtn = document.getElementById('marqueeBtn');
const formSection = document.getElementById('formSection');


sliderBtn.addEventListener('click', () => showForm('slider'));
newsBtn.addEventListener('click', () => showForm('news'));
marqueeBtn.addEventListener('click', () => showForm('marquee'));

function showForm(type) {
  let formHTML = '';

  switch (type) {
    case 'slider':
      formHTML = `
        <div class="form-container active">
          <h3>Add Slider Image</h3>
          <input type="text" id="sliderTitle" placeholder="Enter title">
          <input type="file" id="sliderImage" accept="image/*">
          <button onclick="previewImage()">Preview Image</button>
          <button onclick="saveContent('slider')">Submit</button>
        </div>
      `;
      break;

    case 'news':
      formHTML = `
        <div class="form-container active">
          <h3>Add News</h3>
          <input type="text" id="newsTitle" placeholder="Enter news title">
        <textarea id="newsDescription" placeholder="Enter news description"></textarea>

          <button onclick="saveContent('news')">Submit</button>
        </div>
      `;
      break;

    case 'marquee':
      formHTML = `
        <div class="form-container active">
          <h3>Add Marquee Text</h3>
          <input type="text" id="marqueeText" placeholder="Enter scrolling text">
          <button onclick="saveContent('marquee')">Submit</button>
        </div>
      `;
      break;
  }

  // Insert the form HTML into the form section
  formSection.innerHTML = formHTML;
}

// Function to Save Content Based on Type
function saveContent(type) {
  switch (type) {
    case 'slider':
      const sliderTitle = document.getElementById('sliderTitle').value;
      const sliderImage = document.getElementById('sliderImage').files[0];

      if (sliderTitle && sliderImage) {
        alert('Slider saved successfully!');
        // Add logic to display the image in the slider container
      } else {
        alert('Please fill all fields.');
      }
      break;

    case 'news':
      const newsTitle = document.getElementById('newsTitle').value;
      const newsDescription = document.getElementById('newsDescription').value;

      if (newsTitle && newsDescription) {
        alert('News saved successfully!');
        // Add logic to display the news in the news container
      } else {
        alert('Please fill all fields.');
      }
      break;

    case 'marquee':
      const marqueeText = document.getElementById('marqueeText').value;

      if (marqueeText) {
        alert('Marquee text saved successfully!');
        // Add logic to display the marquee text
      } else {
        alert('Please enter marquee text.');
      }
      break;
  }
}

// Function to Preview Selected Image
function previewImage() {
  const image = document.getElementById('sliderImage').files[0];

  if (image) {
    const reader = new FileReader();
    reader.onload = function (e) {
      alert('Preview: ' + e.target.result);
    };
    reader.readAsDataURL(image);
  } else {
    alert('No image selected.');
  }
}