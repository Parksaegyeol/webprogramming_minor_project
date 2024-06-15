document.addEventListener("DOMContentLoaded", () => {

   
  
    const f_photo = document.querySelector("#f_photo")
    f_photo.addEventListener("change", (e) => {
      
      const reader = new FileReader()
      reader.readAsDataURL(e.target.files[0])
  
      reader.onload = function(event) {
      
  
        const f_preview = document.querySelector("#f_preview")
        f_preview.setAttribute("src", event.target.result)
      }
    })  
  })