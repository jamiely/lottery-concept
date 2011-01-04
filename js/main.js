$(function(){
  // @@@@@@@@@@
  // jackpot stuff
  var initialAmount = 100.01;
  var renderJackpot = function(value) {
    $('.jackpot').text('$000000000' + value.toFixed(2));
  };
  var updateJackpot = function() {
    initialAmount = initialAmount + Math.random() / 100;
    renderJackpot(initialAmount);
  };
  updateJackpot();
  setInterval(updateJackpot, 1000);
  
  var ads = [
    {name: 'Apple'},
    {name: 'Microsoft'},
    {name: 'Burger King'},
    {name: 'Camera Warehouse'},
    {name: 'Xooter'},
    {name: 'ScoopFun'},
    {name: 'Nova'},
    {name: 'Flickr'},
    {name: 'Cooleon Inc.'}
  ];
  
  // @@@@@@@@@
  // ads
  
  // next number
  var selectedBox = 0;
  var entries = $('input[name=entry]');
  
  var selectNumber = function(evt) {
    
    
    var target = $(evt.currentTarget);
    if(!target.is('.selection')) return;
    
    var value = target.data('value');
    entries.eq(selectedBox).val(value);
    
    selectedBox ++;
    
    // we are done selecting
    if(selectedBox >= entries.size()) {
      $('.select').fadeOut('slow', function() {
        $(this).remove();
        $('.result').show().slideUp();
      })
    }
  };
  
  $('.select').each(function() {
    var select = $(this),
      tmplAd = $('#tmplAdText');
      
    $.each(ads, function(i, ad) {
      
      ad.value = i + 1;
      var selection = tmplAd.tmpl(ad).appendTo(select),
        link = selection.find('a')
      
      selection.data('value', ad.value);
      selection.click(selectNumber);
    });
    
  });
});