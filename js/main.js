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
  var ads = [
    {name: 'MacMall', im: 'macmall.jpg'},
    {name: 'Microsoft', im: 'microsoft.jpg'},
    {name: 'BK', im: 'bk.jpg'},
    {name: 'CamRUs', im: 'camerarus.jpg'},
    {name: 'Xooter', im: 'xooter.jpg'},
    {name: 'ScoopFun', im: 'scoopfree.jpg'},
    {name: 'Nova', im: 'nova.jpg'},
    {name: 'Flickr', im: 'flickr.jpg'},
    {name: 'Cooleon', im: 'cooleon.jpg'},
    {name: 'MacMall', im: 'macmall.jpg'}
  ];
  
  // setup entry
  var entryBoxCount = 5;
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
      
    //input.val(value);
    

    entry.find('.input-container').html('<img src="images/numbers/' + value + '.png" />')
    
    var img = $('<img src="ads/none.jpg" />').attr('src', 'ads/'+(ad.im || 'none.jpg'));
    entry.find('.ad > a').html(img);

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
  
  // selections
  $('.select').each(function() {
    var select = $(this),
      tmplAd = $('#tmplAdText');
      
    $.each(ads, function(i, ad) {
      
      ad.value = i;
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
    
  //onYoutubePlayerStateChange(0);
  
});