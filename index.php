<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="google" value="notranslate">
  <title>Programming processing with blocks</title>
  <link rel="stylesheet" href="style.css">
  <!--<script src="../storage.js"></script>-->
  <script src="/blockly/blockly_compressed.js"></script>
  
  <!-- <script src="/blockly/blocks_compressed.js"></script> -->
  <script src="/blockly/blocks/logic.js"></script>
<script src="/blockly/blocks/loops.js"></script>
<script src="/blockly/blocks/math.js"></script>
<script src="/blockly/blocks/text.js"></script>
<script src="/blockly/blocks/lists.js"></script>
<script src="/blockly/blocks/colour.js"></script>
<script src="/blockly/blocks/variables.js"></script>
<script src="/blockly/blocks/procedures.js"></script>
<script src="/blockly/blocks/processing.js"></script>
  
  <!--<script src="/blockly/javascript_compressed.js"></script>-->
  
  <script src="/blockly/generators/javascript.js"></script>
<script src="/blockly/generators/javascript/logic.js"></script>
<script src="/blockly/generators/javascript/loops.js"></script>
<script src="/blockly/generators/javascript/math.js"></script>
<script src="/blockly/generators/javascript/text.js"></script>
<script src="/blockly/generators/javascript/lists.js"></script>
<script src="/blockly/generators/javascript/colour.js"></script>
<script src="/blockly/generators/javascript/variables.js"></script>
<script src="/blockly/generators/javascript/procedures.js"></script>
<script src="/blockly/generators/javascript/processing.js"></script>

  <!--<script src="/blockly/python_compressed.js"></script>
  <script src="/blockly/php_compressed.js"></script>
  <script src="/blockly/dart_compressed.js"></script>-->
  <script src="/js/processing.min.js"></script>
  <script src="/js/processing-helper.js"></script>
  <script src="/js/jquery-2.2.0.min.js"></script>
  <script src="/js/jquery-ui.min.js"></script>
  
  <script src="code.js"></script>
</head>
<body>
<div id="processing_iframe">
<div id="sketch-container" class="draggable">
      <canvas id="sketch"></canvas>
      <textarea rows="20" cols="80" id="code" style="display:none;"></textarea>
    </div>
   </div>
<?php /* <iframe id="processing_iframe" src="https://bprocessing.eempo.net/processing.php" frameborder="0" allowfullscreen></iframe> */ ?>
  <table width="100%" height="100%">
    <tr>
      <td>
        <h1>
        <!--<a href="https://developers.google.com/blockly/">Blockly</a>&rlm; &gt;
          <a href="../index.html">Demos</a>&rlm; &gt;-->
          <span id="title" style="display:none;">...</span>
          
          
          <span id="exercise_title">...</span>
        </h1>
      </td>
      <td class="farSide">
        <select id="languageMenu"></select>
      </td>
    </tr>
    <tr>
      <td colspan=2>
        <table width="100%">
          <tr id="tabRow" height="1em">
            <td id="tab_blocks" class="tabon">...</td>
            <td class="tabmin">&nbsp;</td>
            <td id="tab_javascript" class="taboff">Processing</td>
            <td class="tabmin">&nbsp;</td>
            <td id="tab_python" class="taboff">Python</td>
            <td class="tabmin">&nbsp;</td>
            <td id="tab_php" class="taboff">PHP</td>
            <td class="tabmin">&nbsp;</td>
            <td id="tab_dart" class="taboff">Dart</td>
            <td class="tabmin">&nbsp;</td>
            <td id="tab_xml" class="taboff">XML</td>
            <td class="tabmax">
              <button id="trashButton" class="notext" title="..." style="display:none;">
                <img src='/blockly/media/1x1.gif' class="trash icon21">
              </button>
              <button id="linkButton" class="notext" title="..." style="display:none;">
                <img src='/blockly/media/1x1.gif' class="link icon21">
              </button>
              <button id="runButton" class="notext primary" title="...">
                <img src='/blockly/media/1x1.gif' class="run icon21" >
              </button>
              <a href="https://jsbin.com/bewerahozi/edit?js,output" target="_blank"><img src='https://static.jsbin.com/images/dave.min.svg' class="run icon21" alt="jsbin" title="jsbin"></a>
              <a href="http://rapidtables.com/web/color/RGB_Color.htm" target="_blank"><img src='https://i.ytimg.com/vi/sr_vL2anfXA/maxresdefault.jpg' class="run icon21"  alt="rgb" title="rgb"></a>
              
            </td>
          </tr>
          
        </table>
      </td>
    </tr>
    <tr>
      <td height="100%" colspan=2 id="content_area">
      </td>
     
    </tr>
  </table>
 
  <div id="content_blocks" class="content"></div>
  <pre id="content_javascript" class="content"></pre>
  <pre id="content_php" class="content"></pre>
  <pre id="content_python" class="content"></pre>
  <pre id="content_dart" class="content"></pre>
  <textarea id="content_xml" class="content" wrap="off"></textarea>

  <xml id="toolbox" style="display: none">
  
  <category id="catVariables" colour="60">
  	
  	<block type="variables_decl_boolean"></block>
  	<block type="variables_decl_int"></block>
  	<block type="variables_decl_float"></block>
  	<block type="variables_decl_char"></block>
  	<block type="variables_decl_string"></block>
  	
  	<block type="variables_asign"></block>
  	<block type="variables_get"></block>
  	
  	
  	<block type="math_number"></block>
  	<block type="math_constant"></block>
  	
  	<block type="logic_boolean" colour="0"></block>
  	
  	<block type="logic_null"></block>
  	<!--<block type="variables_decl"></block>-->
  </category>
  
  <category id="catCond" colour="225">
  	<block type="controls_if"></block>
        <block type="controls_if">
          <mutation else="1"></mutation>
        </block>
  	
  	<!-- falta o switch case -->
  </category>
  
    <category id="catLoops" colour="120">
      <block type="controls_repeat_ext">
        <value name="TIMES">
          <shadow type="math_number">
            <field name="NUM">10</field>
          </shadow>
        </value>
      </block>
      <block type="controls_whileUntil"></block>
      <block type="controls_for">
        <value name="FROM">
          <shadow type="math_number">
            <field name="NUM">1</field>
          </shadow>
        </value>
        <value name="TO">
          <shadow type="math_number">
            <field name="NUM">10</field>
          </shadow>
        </value>
        <value name="BY">
          <shadow type="math_number">
            <field name="NUM">1</field>
          </shadow>
        </value>
      </block>
      <block type="controls_forEach"></block>
      
    </category>
    <category id="catFunctions" colour="290" custom="PROCEDURE"></category>
  <sep></sep>
  
  <category id="catMath" colour="170">
  	<block type="math_arithmetic">
        <value name="A">
          <shadow type="math_number">
            <field name="NUM">1</field>
          </shadow>
        </value>
        <value name="B">
          <shadow type="math_number">
            <field name="NUM">1</field>
          </shadow>
        </value>
      </block>
      
      
      <block type="math_single">
        <value name="NUM">
          <shadow type="math_number">
            <field name="NUM">9</field>
          </shadow>
        </value>
      </block>
      <block type="math_trig">
        <value name="NUM">
          <shadow type="math_number">
            <field name="NUM">45</field>
          </shadow>
        </value>
      </block>
      
      <block type="math_number_property">
        <value name="NUMBER_TO_CHECK">
          <shadow type="math_number">
            <field name="NUM">0</field>
          </shadow>
        </value>
      </block>
      <block type="math_change">
        <value name="DELTA">
          <shadow type="math_number">
            <field name="NUM">1</field>
          </shadow>
        </value>
      </block>
      <block type="math_round">
        <value name="NUM">
          <shadow type="math_number">
            <field name="NUM">3.1</field>
          </shadow>
        </value>
      </block>
      <block type="math_on_list"></block>
      <block type="math_modulo">
        <value name="DIVIDEND">
          <shadow type="math_number">
            <field name="NUM">64</field>
          </shadow>
        </value>
        <value name="DIVISOR">
          <shadow type="math_number">
            <field name="NUM">10</field>
          </shadow>
        </value>
      </block>
      <block type="math_constrain">
        <value name="VALUE">
          <shadow type="math_number">
            <field name="NUM">50</field>
          </shadow>
        </value>
        <value name="LOW">
          <shadow type="math_number">
            <field name="NUM">1</field>
          </shadow>
        </value>
        <value name="HIGH">
          <shadow type="math_number">
            <field name="NUM">100</field>
          </shadow>
        </value>
      </block>
      <block type="math_random_int">
        <value name="FROM">
          <shadow type="math_number">
            <field name="NUM">1</field>
          </shadow>
        </value>
        <value name="TO">
          <shadow type="math_number">
            <field name="NUM">100</field>
          </shadow>
        </value>
      </block>
      <block type="math_random_float"></block>
  </category>
  
  <category id="catLogic" colour="0">
  	  
  	  <block type="logic_compare" colour="0"></block>
      <block type="logic_operation" colour="0"></block>
      
      <block type="logic_negate"></block>
      
      
      <block type="logic_ternary"></block>
  </category>
  <category id="catText" colour="45">
  		<block type="text"></block>
      <block type="text_join"></block>
      <block type="text_append">
        <value name="TEXT">
          <shadow type="text"></shadow>
        </value>
      </block>
      <block type="text_length">
        <value name="VALUE">
          <shadow type="text">
            <field name="TEXT">abc</field>
          </shadow>
        </value>
      </block>
      <block type="text_isEmpty">
        <value name="VALUE">
          <shadow type="text">
            <field name="TEXT"></field>
          </shadow>
        </value>
      </block>
      <block type="text_indexOf">
        <value name="VALUE">
          <block type="variables_get">
            <field name="VAR">text</field>
          </block>
        </value>
        <value name="FIND">
          <shadow type="text">
            <field name="TEXT">abc</field>
          </shadow>
        </value>
      </block>
      <block type="text_charAt">
        <value name="VALUE">
          <block type="variables_get">
            <field name="VAR">text</field>
          </block>
        </value>
      </block>
      <block type="text_getSubstring">
        <value name="STRING">
          <block type="variables_get">
            <field name="VAR">text</field>
          </block>
        </value>
      </block>
      <block type="text_changeCase">
        <value name="TEXT">
          <shadow type="text">
            <field name="TEXT">abc</field>
          </shadow>
        </value>
      </block>
      <block type="text_trim">
        <value name="TEXT">
          <shadow type="text">
            <field name="TEXT">abc</field>
          </shadow>
        </value>
      </block>
      <block type="text_print">
        <value name="TEXT">
          <shadow type="text">
            <field name="TEXT">abc</field>
          </shadow>
        </value>
      </block>
      <block type="text_prompt_ext">
        <value name="TEXT">
          <shadow type="text">
            <field name="TEXT">abc</field>
          </shadow>
        </value>
      </block>
  </category>
  
  
    
    
   <!-- <category id="catLists" colour="260">
      <block type="lists_create_with">
        <mutation items="0"></mutation>
      </block>
      <block type="lists_create_with"></block>
      <block type="lists_repeat">
        <value name="NUM">
          <shadow type="math_number">
            <field name="NUM">5</field>
          </shadow>
        </value>
      </block>
      <block type="lists_length"></block>
      <block type="lists_isEmpty"></block>
      <block type="lists_indexOf">
        <value name="VALUE">
          <block type="variables_get">
            <field name="VAR">list</field>
          </block>
        </value>
      </block>
      <block type="lists_getIndex">
        <value name="VALUE">
          <block type="variables_get">
            <field name="VAR">list</field>
          </block>
        </value>
      </block>
      <block type="lists_setIndex">
        <value name="LIST">
          <block type="variables_get">
            <field name="VAR">list</field>
          </block>
        </value>
      </block>
      <block type="lists_getSublist">
        <value name="LIST">
          <block type="variables_get">
            <field name="VAR">list</field>
          </block>
        </value>
      </block>
      <block type="lists_split">
        <value name="DELIM">
          <shadow type="text">
            <field name="TEXT">,</field>
          </shadow>
        </value>
      </block>
    </category>
    <category id="catColour" colour="20">
      <block type="colour_picker"></block>
      <block type="colour_random"></block>
      <block type="colour_rgb">
        <value name="RED">
          <shadow type="math_number">
            <field name="NUM">100</field>
          </shadow>
        </value>
        <value name="GREEN">
          <shadow type="math_number">
            <field name="NUM">50</field>
          </shadow>
        </value>
        <value name="BLUE">
          <shadow type="math_number">
            <field name="NUM">0</field>
          </shadow>
        </value>
      </block>
      <block type="colour_blend">
        <value name="COLOUR1">
          <shadow type="colour_picker">
            <field name="COLOUR">#ff0000</field>
          </shadow>
        </value>
        <value name="COLOUR2">
          <shadow type="colour_picker">
            <field name="COLOUR">#3333ff</field>
          </shadow>
        </value>
        <value name="RATIO">
          <shadow type="math_number">
            <field name="NUM">0.5</field>
          </shadow>
        </value>
      </block>
    </category>-->
    <sep></sep>
    <category name="Processing" colour="-1">
      <block type="processing">
      	<value name="SETUP">
      		<block type="size">
      			 <value name="width">
      			 	<shadow type="math_number">
      			 		<field name="NUM">400</field>
      			 	</shadow>
      			 </value>
      			 <value name="height">
      			 	<shadow type="math_number">
      			 		<field name="NUM">400</field>
      			 	</shadow>
      			 </value>
      		</block>
        </value>
      </block>
      
      <block type="size">
      			 <value name="width">
      			 	<shadow type="math_number">
      			 		<field name="NUM">400</field>
      			 	</shadow>
      			 </value>
      			 <value name="height">
      			 	<shadow type="math_number">
      			 		<field name="NUM">400</field>
      			 	</shadow>
      			 </value>
      </block>
      <block type="strokeWeight">
      	<value name="weight">
      			<shadow type="math_number">
      			 		<field name="NUM">10</field>
      			</shadow>
      	</value>
      </block>
      <block type="stroke">
      		
      </block>
      <block type="background"></block>
      <block type="fill"></block>
      <block type="cor"></block>
    </category>
    <category name="Mouse" colour="-1">
    	<block type="mouseX"></block>
    	<block type="mouseY"></block>
    	<block type="mousePressed"></block>
    </category>
    <category name="Figuras" colour="-1">
	  <block type="point"></block>
      <block type="line"></block>
	  <block type="arc"></block>
      
      <block type="rect"></block>
	  <block type="triangle"></block>
	  <block type="quad"></block>
	  <block type="ellipse"></block>
	   
    </category>
    
    
  </xml>


<?php
if(isset($_GET['n']) ){
	$n = $_GET['n'];
	$is_active = isset($_GET['inactive']);
	
	if(is_numeric($n) && $is_active){
		include("$n.inc");
	}else{
		include("0.inc");
	}
	
}else{
	include("0.inc");
}
?>
<script>
$(document).ready(function(){
<?php
if(isset($_GET['xml'])){
	?>
		$('#tab_xml').show();
		
		
		
	<?php 
}?>

});

</script>

  

</body>
</html>
