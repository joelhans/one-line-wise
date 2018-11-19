document.addEventListener("DOMContentLoaded", function() {

  // DOM
  var search = document.querySelector('#searchbox'),
      clear  = document.querySelector('.clear'),
      tags   = document.querySelectorAll('.tag'),
      cards  = document.querySelectorAll('.card'),
      copy   = document.querySelectorAll('.copy'),
      perma  = document.querySelectorAll('.perma');

  // Filtering function
  var filter = function () {
    var query = search.value.toLowerCase(),
        match = new Function;

    [].forEach.call(cards, function(card) {
      var lineVal  = card.children[0].children[0].value.toLowerCase(),
          lineDesc = card.children[0].children[2].innerHTML.toLowerCase(),
          lineTag  = card.children[0].children[3].innerHTML.toLowerCase(),
          lineHash = card.children[0].children[4].innerHTML.toLowerCase();

      if ( lineVal.indexOf(query) >= 0 || lineDesc.indexOf(query) >= 0 || lineTag.indexOf(query) >= 0 || lineHash.indexOf(query) >= 0 ) {
        card.classList.remove('hidden', 'focus');
      } else {
        card.classList.add('hidden');
      }
      document.querySelector('.perma_detail').classList.remove('showing');

    });
  };

  // Filter when tag is clicked
  [].forEach.call(tags, function(el) {
    el.addEventListener("click", function(event) {

      search.value = this.innerHTML;
      filter();

    });
  });

  // Filter when permalink is clicked
  [].forEach.call(perma, function(el) {
    el.addEventListener("click", function(event) {

      search.value = this.innerHTML;
      filter();
      document.querySelector('.' + this.innerHTML.split('#')[1]).classList.add('focus');
      document.querySelector('.perma_detail').classList.add('showing');

    });
  });

  // Filter when search box is changed
  search.addEventListener('input', filter);

  // Clear search box
  clear.addEventListener('click', function(event) {
    search.value = '';
    filter();
  });

  // Copy to clipboard function
  [].forEach.call(copy, function(el) {
    el.addEventListener("click", function(event) {

      // Revert copy button text back to "Copy" on all elements
      [].forEach.call(copy, function(el) {
        el.innerHTML = 'Copy';
      });

      // Select value of hidden textarea and copy to clipboard
      this.parentNode.parentNode.children[0].select();
      document.execCommand("copy");

      // Change button to read "Copied!"
      this.innerHTML = 'Copied!'

    });
  });

  // Perma link function
  if ( window.location.hash ) {

    var hash = window.location.hash.split('#')[1];
    search.value = window.location.hash;
    filter();
    document.querySelector('.' + hash).classList.add('focus');
    document.querySelector('.perma_detail').classList.add('showing');

  };

});