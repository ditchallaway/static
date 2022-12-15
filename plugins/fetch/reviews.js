
fetch(
  "https://opensheet.elk.sh/1DIyjfsxyEqHQP_nfHW1JvAmD7IKxjg9V43rjLawkV-Y/1"
)


  .then((res) => res.json())

  .then((data) => {
      let output = ' ';
    data.forEach((row) => {
        let stars = "";
        let rating = row.rating
        for (let i = 0; i < rating; i++) {

            stars += `<i class="fa fa-star color-yellow-light h5 mr-4"></i> `
        }
    

        output += `
      
        <div class="card card-style p-3">
            <div class="d-flex content mt-0 mb-1">
            <div>
                    <img src="${row.profile_img}" data-src="${row.profile_img}" width="60" class="rounded-circle me-3 shadow-xl preload-img entered loaded" data-ll-status="loaded">
                </div>
                <!-- left side of profile -->
                <div class="flex-grow-1  ms-3">
                    <h2 class="mb-3">${row.name}</h2>
                     ${stars}
                    

                  
                </div>
            </div>
          
            <div class="content">

                <p class="mb-n3">${row.comment}</p><br>
                <a href="${row.review_url}" class="font-600 color-highlight">Read More...</a>
                <img class="d-block" src="/images/pictures/google-logo.png">
            </div>
        </div>

        `;
    ;
  
        document.getElementById('reviews').innerHTML = output;
 
  
    })})
