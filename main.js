var elems = document.getElementsByClassName('box');
    Array.from(elems).forEach(v => v.addEventListener('change', function(){
      this.parentNode.classList.toggle('checked');
    }));

