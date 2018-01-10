var lightbox = {
  json:null, // the json property of this js object, lightbox
  lightboxContainer : document.querySelector('#lightbox'),
  closeButton : document.querySelector('#lightbox .close'),
  init:function(){
    console.log("init");
    lightbox.getPortfolioPieces();
    lightbox.closeButton.addEventListener('click',lightbox.close,false); // add the close click event to the lightbox
  },
  close:function(){
    let carousel = lightbox.lightboxContainer.querySelector('.carousel');
    carousel.innerHTML = ""; // erase everything inside carousel
    lightbox.lightboxContainer.classList.add('hidden'); // re-hide the ligthbox
  },
  getPortfolioPieces:function(){
    const url = "admin/scripts/getportfolio.php"; // the url of what we want
    fetch(url) // run fetch to get the stuff
      .then(function(response){ // with the response
        return response.text(); // return the text fromt the page
      })
      .then(function(body){ // with the text
        //access the json property of the lightbox object
        lightbox.json = JSON.parse(body); // parse it into json
        // console.log(json); // test
        let container = document.querySelector('#portfolioContainer');
        lightbox.json.forEach(function(object,index){ // for each in the result,
          // console.group("");
          // console.log(object);
          // console.log(index);
          // console.groupEnd();
          let portfolioPiece = document.createElement('div');
          // portfolioPiece.classList.add('col-xs-6'); // add classes
          portfolioPiece.id = object.pieces_id;
          portfolioPiece.className = "col-xs-6 col-md-4 portfolioPieces"; //overwrite existing classes
          let image = document.createElement('img');
          image.className = "thumbs img-responsive hover-shadow";
          image.src = object.images_path;
          image.alt = object.pieces_name;
          // image.src = json[index].images_path;
          portfolioPiece.appendChild(image);
          // console.log(portfolioPiece);
          container.appendChild(portfolioPiece);

          //add lightbox click event
          portfolioPiece.addEventListener('click',function(){
            fetch(url+"?id="+this.id)
              .then(function(response){
                return response.text();
              })
              .then(function(text){
                let pieceContent = JSON.parse(text);
                let piece = pieceContent[0]; // select only the first image, since values like name are repeated accross images
                // lightbox.lightboxContainer.style.display = "none";
                lightbox.lightboxContainer.classList.remove('hidden'); //show the lightbox
                let name = lightbox.lightboxContainer.querySelector('.name');
                name.innerHTML = piece.pieces_name; // insert the name
                let year = lightbox.lightboxContainer.querySelector('.year');
                year.innerHTML = piece.pieces_year; // insert the year
                let desc = lightbox.lightboxContainer.querySelector('.desc');
                desc.innerHTML = piece.pieces_desc; // insert the desc
                let mainImg = lightbox.lightboxContainer.querySelector('img.top');
                mainImg.src = piece.images_path; // set the image src
                let carousel = lightbox.lightboxContainer.querySelector('.carousel');
                pieceContent.forEach(function(element,index){
                  let lrgImage = document.createElement('img');
                  lrgImage.src = element.images_path;
                  lrgImage.classList.add('lrgImage');
                  lrgImage.addEventListener('click', function(){
                    if (element.category_id ==='4'){
                      mainImg.classList.add('hidden');
                      let video = document.createElement('video');
                      video.controls = true;
                      video.src = "img/portfolio/videos/"+element.images_id+"-video.mp4"
                      //video.src = element.images_path;
                      lightbox.lightboxContainer.insertBefore(video,mainImg);
                    }else if(element.category_id === '3'){
                      window.open("img/portfolio/pdfs/"+element.images_id+"-pdf.pdf");
                    }else{
                      mainImg.src = lrgImage.src;
                    }
                  },false);
                  carousel.appendChild(lrgImage);
                });
              });
          },false);
        });
      });
  }
};
lightbox.init();
