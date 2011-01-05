var onYoutubePlayerStateChange = function(newState) {
  if(newState == 0) { // stopped
    $('.video-ad').hide();
    $('.entry-container').show();
    $('.select').show();
  }
};

function onYouTubePlayerReady(playerId) {
  var el = document.getElementById("myytplayer");
  
  //$('#myytplayer').bind('onStateChange', onYoutubePlayerStateChange);
  el.addEventListener('onStateChange', 'onYoutubePlayerStateChange');
  el.addEventListener('onError', function(error) {
    alert('error: ' + error);
  });

}
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
    {name: 'MacMall', im: 'macmall.jpg'},
    {name: 'Microsoft', im: 'microsoft.jpg'},
    {name: 'Burger King', im: 'bk.jpg'},
    {name: 'CamerasRUs', im: 'camerarus.jpg'},
    {name: 'Xooter', im: 'xooter.jpg'},
    {name: 'ScoopFun', im: 'scoopfree.jpg'},
    {name: 'Nova', im: 'nova.jpg'},
    {name: 'Flickr', im: 'flickr.jpg'},
    {name: 'Cooleon Inc.', im: 'cooleon.jpg'}
  ];
  
  // setup entry
  var entryBoxCount = 4;
  $('.entry-container').each(function(){
    var container = $(this),
      tmplEntry = $('#tmplEntry');
    
    for(var i = 0; i < entryBoxCount; i++){
      tmplEntry.tmpl({}).appendTo(container);
    }
  });
  
  // @@@@@@@@@
  // ads
  
  // next number
  var selectedBox = 0;
  var entries = $('input[name=entry]');
  
  var selectNumber = function(evt) {
    var target = $(evt.currentTarget);
    if(!target.is('.selection')) return;
    
    var ad = target.data('ad'),
      value = ad.value,
      input = entries.eq(selectedBox),
      entry = input.parents('div.entry');
      
    input.val(value);
    entry.addClass('filled');
    entry.find('.ad img').attr('src', 'ads/'+(ad.im || 'none.jpg'));
    //entry.find('.ad img').attr('src', 'ads/apple.jpg');
     
    selectedBox ++;
    
    // set the stuff
    
    // we are done selecting
    if(selectedBox >= entries.size()) {
      $('.select').addClass('finished').text('Thanks for entering!')
        .fadeOut(5000, function() {
          $(this).remove();
          $('.result').show().slideUp();
        });
    }
  };
  
  $('.select').each(function() {
    var select = $(this),
      tmplAd = $('#tmplAdText');
      
    $.each(ads, function(i, ad) {
      
      ad.value = i + 1;
      var selection = tmplAd.tmpl(ad).appendTo(select),
        link = selection.find('a')
      
      selection.data('ad', ad);
      selection.click(selectNumber);
    });
    
  });
  
  // handle the video advertisement
  
  var params = { allowScriptAccess: "always" };
  var atts = { id: "myytplayer" };
  
  
  swfobject.embedSWF(
    "http://www.youtube.com/v/cOS5BaxCtAk?fs=1&amp;hl=en_US&autoplay=1&start=40&enablejsapi=1&playerapiid=ytplayer", 
    "yt-replace-me", "640", "385", "8", null, null, params, atts);
  
  
  var hideVideo = function() {
    $('.video-ad').fadeOut();
  };
  
  setTimeout(hideVideo, 49000)
});