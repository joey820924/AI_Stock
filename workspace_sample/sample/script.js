$.get('otherPage.html').then(function(responseData) {
  $('#someElem').append(responseData);
});