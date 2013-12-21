
 <script>
  $(function() {
    var name = $( "#name" ),
      allFields = $( [] ).add( name ),
      tips = $( ".validateTips" );
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {

        Cancel: function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
      }
    });
 
    $( "#create-user" )
      .button()
      .click(function() {
        $( "#dialog-form" ).dialog( "open" );
      });
  });
  </script>



<script type="text/javascript">
$(document).ready(function() {
  /* create a node for the flip-to number */
  $(".votecard em").clone().appendTo(".votecard div");
  /* increment that by 1 */
  var node = $(".votecard em:last strong")
  node.text(parseInt(node.text())+1);
  
  
  function flip(obj) {
    obj.prev().find("em").animate({
      top: '-=45'
    }, 200);
    obj.toggleClass("voted",true);
  }
  
  $('#voteaction').bind({
    click: function(event) {
      event.preventDefault()
    },
    mouseup: function() {
      flip($(this));
    $(this).unbind('mouseup');
    }
  });
  
});
</script>
  


<?php
if(!isset ($message)) $message = null;
if(!isset($form_action)) $form_action = "new";
?>
<div id="anwersheet">
<?php
$attributes = array(
    'class' => '',
    'id' => '');

?>
<div id="dialog-form" title="">
  <p class="validateTips">All form fields are required.</p>
 
  <?php echo form_open('answer/save', $attributes); ?>
  <fieldset>
    <input id="" type="text" class="" readonly name="username" value='<?php echo ucfirst($this->session->userdata('username'));?>'>
    <input id="" type="text" class="" readonly name="usertype" value='<?php echo ucfirst($this->session->userdata('usertype'));?>'>
    <label for="answer">Your Answer</label><br>
    <textarea  name="answer" rows="10" cols="40" id="name" class="text ui-widget-content ui-corner-all"></textarea>
    <input id="" type="hidden" class="form-control contact-input" name="post" value='<?php echo $id ?>'>
    <input type="hidden" name="form_action" class="form-control" id=""  value="new">
    <input id="btn" class=" " type="submit" value="Submit Discussion" name="Submit">

  </fieldset>
  <?php echo form_close(); ?>

</div>
 
<div id="wdg">
<div id="users-contain" class="ui-widget">
  <div id="question"><div class="spn"><spa><strong>Question</strong> - <?php echo $name;?><span></div></div>
  <table id="table-cls" cellspacing="0" cellpadding="0" border="0" class="stable" >
    <thead> 
    </thead>
    <tbody id="table-body">
      <?php
      $x=0;
        foreach ($table_data as $row) {
          echo "<tr id='home-tab'>";
          echo "<td>
                  <button id='clsaa' class='btn-ajx' style='background-color:#09aeef;'>vote</button>
                  <span id='vote' name='vote' value='\"$x\"'>0</span>
                  <input type='hidden'value=''/>
                </td>";
                $x++;

          echo "<td class='uname'><a class='type'>".$row['usertype']."</a> ".$row['username']."</td>";
          // echo "<td class='subject'>".$row['usertype']."</td>";
          echo "<td>".$row['answer']."</td>";
          echo "</tr>";
        }
      ?>
      <script>
    
        $( ".btn-ajx" ).click(function() {

          var x=$(this);
          x.next().text(parseInt(x.next().text())+1);
          $( "body" ).data( ""+x.next().value, parseInt(x.next().text()) );
        });
         
        function update( j ) {
          var n = parseInt( j.text(), 10 );
          j.text( n + 1 );
        }
      </script>

    </tbody>
  </table>
</div>
</div>
<button id="create-user" class="js-button">Your Answer</button>


</div>