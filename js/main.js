document.addEventListener("DOMContentLoaded", function() {

  // DOM
  var search = document.querySelector('#searchbox'),
      clear  = document.querySelector('.clear'),
      tags   = document.querySelectorAll('.tag'),
      cards  = document.querySelectorAll('.card'),
      copy   = document.querySelectorAll('.copy');

  // Filtering function
  var filter = function () {
    var query = search.value.toLowerCase(),
        match = new Function;

    [].forEach.call(cards, function(card) {
      var lineVal  = card.children[0].children[0].value.toLowerCase(),
          lineDesc = card.children[0].children[2].innerHTML.toLowerCase(),
          lineTag  = card.children[0].children[3].innerHTML.toLowerCase();

      if ( lineVal.indexOf(query) >= 0 || lineDesc.indexOf(query) >= 0 || lineTag.indexOf(query) >= 0 ) {
        card.classList.remove('hidden');
      } else {
        card.classList.add('hidden');
      }

    });
  };

  // Filter when tag is clicked
  [].forEach.call(tags, function(el) {
    el.addEventListener("click", function(event) {

      search.value = this.innerHTML;
      filter();

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

});