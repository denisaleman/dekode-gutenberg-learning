!function(){"use strict";!function(){var e=window.wp.element,t=window.wp.blocks,l=JSON.parse('{"$schema":"https://json.schemastore.org/block.json","apiVersion":2,"name":"dekode-gutenberg-blocks/hello-world","title":"Hello World","textdomain":"gutenberg-examples","icon":"smiley","category":"layout","attributes":{"content":{"type":"string","source":"html","selector":"p"},"alignment":{"type":"string","default":"none"}},"example":{"attributes":{"content":"Hello world","alignment":"right"}},"editorScript":"file:./build/index.js"}');const{name:o}=l;(0,t.registerBlockType)(o,{edit:()=>(0,e.createElement)("h1",null,"Hello World (editor)"),save:()=>(0,e.createElement)("h1",null,"Hello World")})}()}();