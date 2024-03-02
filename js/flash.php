
    <script>
      window.addEventListener('DOMContentLoaded',(event) =>{
        const flashMessage= document.getElementById('flash-message');
        setTimeout(function() {
            if(flashMessage){
                flashMessage.classList.add('opacity-0');
                setTimeout(function(){
                 flashMessage.style.display='none';
                }, 600); //fade duration
              
            }
            
        }, 10000); //5 seconds
    });

</script>

