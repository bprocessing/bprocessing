/**
 * @license
 * Visual Blocks Language
 *
 * Copyright 2012 Google Inc.
 * https://developers.google.com/blockly/
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @fileoverview Generating JavaScript for colour blocks.
 * @author fraser@google.com (Neil Fraser)
 */
'use strict';

goog.provide('Blockly.JavaScript.processing');

goog.require('Blockly.JavaScript');

var processing_prefix = 'processing.';

Blockly.JavaScript['ellipse'] = function(block) {
  var value_coord_x = Blockly.JavaScript.valueToCode(block, 'coord_x', Blockly.JavaScript.ORDER_NONE);
  var value_coord_y = Blockly.JavaScript.valueToCode(block, 'coord_y',Blockly.JavaScript.ORDER_NONE);
  
  var value_radius_x = Blockly.JavaScript.valueToCode(block, 'radius_x', Blockly.JavaScript.ORDER_ATOMIC);
  var value_radius_y = Blockly.JavaScript.valueToCode(block, 'radius_y', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = "ellipse("+value_coord_x+","+value_coord_y+","+value_radius_x+","+value_radius_y+");\n";
  
  // code = 'console.log("'+ code+'");';
  return code;
};
  

Blockly.JavaScript['processing'] = function(block) {
	var statements_decl = Blockly.JavaScript.statementToCode(block, 'DECL');
	var statements_setup = Blockly.JavaScript.statementToCode(block, 'SETUP');
    var statements_draw = Blockly.JavaScript.statementToCode(block, 'DRAW');
    // console.log(statements_draw);
    var code = statements_decl+'\n';
    code = code + 'void setup () {\n'+statements_setup+'\n}\n';
    code = code + 'void draw(){\n'+statements_draw+'\n}\n';
    // code = code + '}';
    // var code = 'uuhpss321s';
  return code;
};

Blockly.JavaScript['size'] = function(block) {
  var arg_0 = Blockly.JavaScript.valueToCode(block, 'width', Blockly.JavaScript.ORDER_ATOMIC);
  var arg_1 = Blockly.JavaScript.valueToCode(block, 'height', Blockly.JavaScript.ORDER_ATOMIC);
  
  var code = 'size('+arg_0+','+arg_1+');\n';
  
  return code;
};

Blockly.JavaScript['strokeWeight'] = function(block) {
  var arg_0 = Blockly.JavaScript.valueToCode(block, 'weight', Blockly.JavaScript.ORDER_ATOMIC);
  
  var code = 'strokeWeight('+arg_0+');\n';
  
  return code;
};

Blockly.JavaScript['background'] = function(block) {
  var arg_0 = Blockly.JavaScript.valueToCode(block, 'r', Blockly.JavaScript.ORDER_ATOMIC);
  var arg_1 = Blockly.JavaScript.valueToCode(block, 'g', Blockly.JavaScript.ORDER_ATOMIC);
  var arg_2 = Blockly.JavaScript.valueToCode(block, 'b', Blockly.JavaScript.ORDER_ATOMIC);
  
  var code = 'background('+arg_0+','+arg_1+','+arg_2+');\n';
  
  return code;
};

Blockly.JavaScript['fill'] = function(block) {
  var arg_0 = Blockly.JavaScript.valueToCode(block, 'r', Blockly.JavaScript.ORDER_ATOMIC);
  var arg_1 = Blockly.JavaScript.valueToCode(block, 'g', Blockly.JavaScript.ORDER_ATOMIC);
  var arg_2 = Blockly.JavaScript.valueToCode(block, 'b', Blockly.JavaScript.ORDER_ATOMIC);
  
  var code = 'fill('+arg_0+','+arg_1+','+arg_2+');\n';
  
  return code;
};

Blockly.JavaScript['stroke'] = function(block) {
  var arg_0 = Blockly.JavaScript.valueToCode(block, 'r', Blockly.JavaScript.ORDER_ATOMIC);
  var arg_1 = Blockly.JavaScript.valueToCode(block, 'g', Blockly.JavaScript.ORDER_ATOMIC);
  var arg_2 = Blockly.JavaScript.valueToCode(block, 'b', Blockly.JavaScript.ORDER_ATOMIC);
  
  var code = 'stroke('+arg_0+','+arg_1+','+arg_2+');\n';
  
  return code;
};

Blockly.JavaScript['mouseX'] = function(block) {
  var code = "mouseX";
  
  return [code, Blockly.JavaScript.ORDER_FUNCTION_CALL];
};

Blockly.JavaScript['mouseY'] = function(block) {
  var code = 'mouseY';
  
 return [code, Blockly.JavaScript.ORDER_FUNCTION_CALL];
};

Blockly.JavaScript['rect'] = function(block) {
  var value_coord_x = Blockly.JavaScript.valueToCode(block, 'coord_x', Blockly.JavaScript.ORDER_NONE);
  var value_coord_y = Blockly.JavaScript.valueToCode(block, 'coord_y',Blockly.JavaScript.ORDER_NONE);
  
  var value_radius_x = Blockly.JavaScript.valueToCode(block, 'radius_x', Blockly.JavaScript.ORDER_ATOMIC);
  var value_radius_y = Blockly.JavaScript.valueToCode(block, 'radius_y', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = "rect("+value_coord_x+","+value_coord_y+","+value_radius_x+","+value_radius_y+");\n";
  
  // code = 'console.log("'+ code+'");';
  return code;
};

Blockly.JavaScript['mousePressed'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'mousePressed';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

Blockly.JavaScript['cor'] = function(block) {
  var colour_name = block.getFieldValue('NAME');
  // TODO: Assemble JavaScript into code variable.
  var code = '...';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

Blockly.JavaScript['random'] = function(block) {
	var argument0 = Blockly.JavaScript.valueToCode(block, 'FROM',
		Blockly.JavaScript.ORDER_COMMA) || '0';
	var argument1 = Blockly.JavaScript.valueToCode(block, 'TO',
		Blockly.JavaScript.ORDER_COMMA) || '0';
	
	var code = 'random('+argument0+','+argument1+');';
	return code;
}

function getField(block,field){
	return Blockly.JavaScript.valueToCode(block, field,Blockly.JavaScript.ORDER_COMMA) || '0';
}
Blockly.JavaScript['point'] = function(block) {
	
	var code = 'point('+getField(block,'coord_x')+','+getField(block,'coord_y')+');';
	return code;
}

