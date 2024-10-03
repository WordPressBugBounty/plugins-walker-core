(()=>{"use strict";var e,a={359:()=>{const e=window.wp.blocks,a=window.React,n=window.wp.i18n,o=window.wp.blockEditor,t=window.wp.components,i=window.wp.element,r=window.wp.compose;function l(e,a){return`\n    #${e}.layout-grid:not(.has-masonry) .walker-core__grid-wrapper {\n        display: grid;\n        grid-template-columns: repeat(${a.gridOptions.columnCount}, 1fr);\n        gap: ${a.gridOptions.gap}px;\n    }\n    #${e}.layout-grid.has-masonry .walker-core__grid-wrapper {\n        display: block;\n        column-count: ${a.gridOptions.columnCount};\n        column-gap: ${a.gridOptions.gap}px;\n        break-inside: avoid-column;\n    }\n    #${e}.layout-grid.has-masonry .walker-core__grid-wrapper > .wp-block-post {\n        margin-bottom: ${a.gridOptions.gap}px;\n    }\n\n    #${e}.layout-carousel.carousel-direction-vertical .swiper-wrapper {\n        max-height: ${a.height}px;\n        height: 100%;\n    }\n\n    #${e} .swiper-button-prev::after,\n    #${e} .swiper-button-next::after {\n        font-size: ${a.navigation.size}px;\n    }\n    #${e} .swiper-button-prev,\n    #${e} .swiper-button-next {\n        width: ${a.navigation.boxWidth}px;\n        height: ${a.navigation.boxHeight}px;\n        border-radius: ${a.navigation.borderRadius}px;\n        border: ${a.navigation.border.width} ${a.navigation.border.style} ${a.navigation.border.color};\n        color: ${a.navigation.color};\n        background-color: ${a.navigation.boxColor};\n    }\n    #${e} .swiper-button-prev:hover,\n    #${e} .swiper-button-next:hover {\n        color: ${a.navigation.colorHover};\n        background-color: ${a.navigation.boxColorHover};\n        border-color: ${a.navigation.borderColorHover};\n    }\n\n    #${e} .swiper-pagination {\n        bottom: ${a.pagination.verticalPosition}px;\n    }\n    #${e} .swiper-pagination .swiper-pagination-bullet {\n        width: ${a.pagination.default.width}px;\n        height: ${a.pagination.default.height}px;\n        border-radius: ${a.pagination.default.borderRadius}px;\n        background-color: ${a.pagination.default.color};\n    }\n    #${e}.carousel-direction-horizontal .swiper-pagination-bullets .swiper-pagination-bullet {\n        margin: 0 var(--swiper-pagination-bullet-horizontal-gap, ${a.pagination.gap}px);\n    }\n    #${e}.carousel-direction-vertical .swiper-pagination-bullets .swiper-pagination-bullet {\n        margin: var(--swiper-pagination-bullet-vertical-gap, ${a.pagination.gap}px) 0;\n    }\n    #${e} .swiper-pagination .swiper-pagination-bullet-active {\n        width: ${a.pagination.active.width}px;\n        height: ${a.pagination.active.height}px;\n        outline: ${a.pagination.active.border.width} ${a.pagination.active.border.style} ${a.pagination.active.border.color};\n        outline-offset: ${a.pagination.active.offset}px;\n        border-radius: ${a.pagination.active.borderRadius}px;\n        background-color: ${a.pagination.active.color};\n    }\n    #${e} .swiper-pagination .swiper-pagination-bullet:hover {\n        background-color: ${a.pagination.default.colorHover};\n    }\n    #${e} .swiper-pagination .swiper-pagination-bullet-active:hover {\n        background-color: ${a.pagination.active.colorHover};\n        border-color: ${a.pagination.active.borderColorHover};\n    }\n    `}const s=[["core/query",{className:"walker-core-post__swiper-container",queryId:1,query:{perPage:"3",postType:"post"},lock:{move:!1,remove:!0}},[["core/post-template",{className:"walker-core__grid-wrapper swiper-wrapper",lock:{move:!1,remove:!0}},[["core/columns",{verticalAlignment:null},[["core/column",{verticalAlignment:"top"},[["core/post-featured-image",{isLink:!0}]]],["core/column",{verticalAlignment:"top"},[["core/post-title",{isLink:!0,style:{typography:{fontSize:"20px"}}}],["core/post-excerpt",{excerptLength:20}]]]]]]]]]],c=(0,i.memo)((({blockID:e,attributes:n})=>{const t=(0,r.useRefEffect)((e=>{let a={};const o=e.querySelector(".walker-core-post__swiper-container");let t=e.querySelector(".swiper-button-prev"),i=e.querySelector(".swiper-button-next"),r=e.querySelector(".swiper-pagination");const l={init:!0,direction:n.sliderOptions.direction,speed:n.sliderOptions.speed,centeredSlides:n.sliderOptions.centeredSlides,slidesPerView:n.sliderOptions.slidesPerView,spaceBetween:n.sliderOptions.spaceBetween,navigation:{nextEl:i,prevEl:t},pagination:{clickable:!0,el:r},breakpoints:{400:{slidesPerView:1},767:{slidesPerView:n.sliderOptions.slidesPerView<=2?n.sliderOptions.slidesPerView:2},1024:{slidesPerView:n.sliderOptions.slidesPerView<=3?n.sliderOptions.slidesPerView:3},1180:{slidesPerView:n.sliderOptions.slidesPerView}},allowTouchMove:!1};if(e&&"carousel"===n.layout){let t=[];const i=setInterval((()=>(e&&"carousel"===n.layout&&(t=e.querySelectorAll(".swiper-wrapper > .wp-block-post"),t.length>0&&t.forEach((e=>{e.classList.contains("swiper-slide")||e.classList.add("swiper-slide")}))),()=>{clearInterval(i)})),[1e3]);o&&(a=new Swiper(o,l))}return()=>{a&&Object.keys(a).length>0&&a.destroy()}}),[n]);return(0,a.createElement)(a.Fragment,null,(0,a.createElement)("style",{dangerouslySetInnerHTML:{__html:l(e,n)}}),(0,a.createElement)("div",{className:`walker-core-post-block layout-${n.layout} ${"grid"===n.layout&&n.gridOptions.masonry?"has-masonry":""} ${"carousel"===n.layout&&n.navigation.hoverShow?"nav-hover-show":""}  ${"carousel"===n.layout?"carousel-direction-"+n.sliderOptions.direction:""}`,id:e,ref:t},(0,a.createElement)(o.InnerBlocks,{template:s}),"carousel"===n.layout&&(0,a.createElement)(a.Fragment,null,n.navigation.enabled&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)("div",{className:"swiper-button-prev"}),(0,a.createElement)("div",{className:"swiper-button-next"})),n.pagination.enabled&&(0,a.createElement)("div",{className:"swiper-pagination"}))))})),p=JSON.parse('{"UU":"walker-core/post-carousel","DD":"Dynamic Content Builder","h_":"Immerse yourself in an engaging browsing journey using our \'Post Carousel\' block, showcasing visually stunning and interactive featured content for effortless exploration."}');(0,e.registerBlockType)(p.UU,{title:(0,n.__)(p.DD,"walker-core"),description:(0,n.__)(p.h_,"walker-core"),edit:function({attributes:e,setAttributes:i,clientId:r}){if(e.cover)return(0,a.createElement)("img",{src:e.cover});e.clientId=r;const l="walkerCore_"+r.replace(/-/gi,"_"),s=(0,o.useBlockProps)({className:"walker-core-block__wrapper"});return(0,a.createElement)(a.Fragment,null,(0,a.createElement)("div",{...s},(0,a.createElement)(c,{blockID:l,attributes:e})),(0,a.createElement)(o.InspectorControls,{key:"setting",group:"settings"},(0,a.createElement)(t.PanelBody,{title:(0,n.__)("General","walker-core")},(0,a.createElement)(t.SelectControl,{label:(0,n.__)("Layout","walker-core"),options:[{label:(0,n.__)("Grid","walker-core"),value:"grid"},{label:(0,n.__)("Carousel","walker-core"),value:"carousel"}],value:e.layout,onChange:a=>{i({...e,layout:a})}})),"grid"===e.layout&&(0,a.createElement)(t.PanelBody,{title:(0,n.__)("Grid Options","walker-core")},(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Column Count","walker-core"),min:1,max:10,step:1,value:e.gridOptions.columnCount,onChange:a=>i({...e,gridOptions:{...e.gridOptions,columnCount:Math.abs(a)}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Gap","walker-core"),min:0,max:300,step:1,value:e.gridOptions.gap,onChange:a=>i({...e,gridOptions:{...e.gridOptions,gap:Math.abs(a)}})}),(0,a.createElement)(t.ToggleControl,{label:(0,n.__)("Enable Masonry","walker-core"),checked:e.gridOptions.masonry,onChange:a=>i({...e,gridOptions:{...e.gridOptions,masonry:a}})})),"carousel"===e.layout&&(0,a.createElement)(t.PanelBody,{title:(0,n.__)("Slider Options","walker-core"),initialOpen:!1},(0,a.createElement)(t.SelectControl,{label:(0,n.__)("Direction","walker-core"),options:[{label:(0,n.__)("Horizontal","walker-core"),value:"horizontal"},{label:(0,n.__)("Vertical","walker-core"),value:"vertical"}],value:e.sliderOptions.direction,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,direction:a}})}),"vertical"===e.sliderOptions.direction&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Height","walker-core"),min:5,max:1500,step:1,value:e.height,onChange:a=>i({...e,height:Math.abs(a)})})),(0,a.createElement)(t.ToggleControl,{label:(0,n.__)("Autoplay","walker-core"),checked:e.sliderOptions.autoplay.enabled,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,autoplay:{...e.sliderOptions.autoplay,enabled:a}}})}),e.sliderOptions.autoplay.enabled&&(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Autoplay Delay","walker-core"),min:100,max:3500,step:100,value:e.sliderOptions.autoplay.delay,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,autoplay:{...e.sliderOptions.autoplay,delay:Math.abs(a)}}})}),(0,a.createElement)(t.ToggleControl,{label:(0,n.__)("Loop","walker-core"),checked:e.sliderOptions.loop,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,loop:a}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Slides per View","walker-core"),min:.1,max:10,step:.1,value:e.sliderOptions.slidesPerView,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,slidesPerView:Math.abs(a)}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Space Between","walker-core"),min:0,max:300,step:1,value:e.sliderOptions.spaceBetween,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,spaceBetween:Math.abs(a)}})}),(0,a.createElement)(t.ToggleControl,{label:(0,n.__)("Centered Slides","walker-core"),checked:e.sliderOptions.centeredSlides,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,centeredSlides:a}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Speed","walker-core"),min:100,max:3500,step:100,value:e.sliderOptions.speed,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,speed:Math.abs(a)}})}),(0,a.createElement)(t.SelectControl,{label:(0,n.__)("Effect","walker-core"),options:[{label:(0,n.__)("Default","walker-core"),value:"none"},{label:(0,n.__)("Fade","walker-core"),value:"fade"},{label:(0,n.__)("Cover Flow","walker-core"),value:"coverflow"},{label:(0,n.__)("Cube","walker-core"),value:"cube"},{label:(0,n.__)("Cards","walker-core"),value:"cards"}],value:e.sliderOptions.effect,onChange:a=>i({...e,sliderOptions:{...e.sliderOptions,effect:a}})}),(0,a.createElement)(t.ToggleControl,{label:(0,n.__)("Enable Pagination","walker-core"),checked:e.pagination.enabled,onChange:a=>i({...e,pagination:{...e.pagination,enabled:a}})}),(0,a.createElement)(t.ToggleControl,{label:(0,n.__)("Enable Navigation","walker-core"),checked:e.navigation.enabled,onChange:a=>i({...e,navigation:{...e.navigation,enabled:a}})}))),(0,a.createElement)(o.InspectorControls,{key:"style",group:"styles"},"carousel"===e.layout&&(0,a.createElement)(a.Fragment,null,e.pagination.enabled&&(0,a.createElement)(t.PanelBody,{title:(0,n.__)("Pagination Styles","walker-core"),initialOpen:!1},(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Vertical Positioning","walker-core"),min:-300,max:300,step:1,value:e.pagination.verticalPosition,onChange:a=>i({...e,pagination:{...e.pagination,verticalPosition:a}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Spacing","walker-core"),min:0,max:100,step:1,value:e.pagination.gap,onChange:a=>i({...e,pagination:{...e.pagination,gap:Math.abs(a)}})}),(0,a.createElement)(t.TabPanel,{className:"walker-core__tab-panel",activeClass:"walker-core__active-tab",tabs:[{name:"default",title:(0,n.__)("Default","walker-core")},{name:"active",title:(0,n.__)("Active","walker-core")}]},(r=>(0,a.createElement)(a.Fragment,null,"default"===r.name&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Width","walker-core"),min:5,max:300,step:1,value:e.pagination.default.width,onChange:a=>i({...e,pagination:{...e.pagination,default:{...e.pagination.default,width:Math.abs(a)}}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Height","walker-core"),min:5,max:300,step:1,value:e.pagination.default.height,onChange:a=>i({...e,pagination:{...e.pagination,default:{...e.pagination.default,height:Math.abs(a)}}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Border Radius","walker-core"),min:0,max:100,step:1,value:e.pagination.default.borderRadius,onChange:a=>i({...e,pagination:{...e.pagination,default:{...e.pagination.default,borderRadius:Math.abs(a)}}})}),(0,a.createElement)(o.PanelColorSettings,{className:"walker-core__color-control",title:(0,n.__)("Color","walker-core"),enableAlpha:!0,colorSettings:[{label:(0,n.__)("Default","walker-core"),value:e.pagination.default.color,onChange:a=>i({...e,pagination:{...e.pagination,default:{...e.pagination.default,color:a}}})},{label:(0,n.__)("Hover","walker-core"),value:e.pagination.default.colorHover,onChange:a=>i({...e,pagination:{...e.pagination,default:{...e.pagination.default,colorHover:a}}})}]})),"active"===r.name&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Width","walker-core"),min:5,max:300,step:1,value:e.pagination.active.width,onChange:a=>i({...e,pagination:{...e.pagination,active:{...e.pagination.active,width:Math.abs(a)}}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Height","walker-core"),min:5,max:300,step:1,value:e.pagination.active.height,onChange:a=>i({...e,pagination:{...e.pagination,active:{...e.pagination.active,height:Math.abs(a)}}})}),(0,a.createElement)(t.__experimentalBorderControl,{className:"walker-core__border-control",enableAlpha:!0,isCompact:!0,shouldSanitizeBorder:!0,label:(0,n.__)("Outline","walker-core"),value:e.pagination.active.border,onChange:a=>{i(void 0===a?{...e,pagination:{...e.pagination,active:{...e.pagination.active,border:{width:"",style:"",color:""}}}}:{...e,pagination:{...e.pagination,active:{...e.pagination.active,border:a}}})}}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Outline Offset","walker-core"),min:0,max:100,step:1,value:e.pagination.active.offset,onChange:a=>i({...e,pagination:{...e.pagination,active:{...e.pagination.active,offset:Math.abs(a)}}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Border Radius","walker-core"),min:0,max:100,step:1,value:e.pagination.active.borderRadius,onChange:a=>i({...e,pagination:{...e.pagination,active:{...e.pagination.active,borderRadius:Math.abs(a)}}})}),(0,a.createElement)(o.PanelColorSettings,{className:"walker-core__color-control",title:(0,n.__)("Color","walker-core"),enableAlpha:!0,colorSettings:[{label:(0,n.__)("Default","walker-core"),value:e.pagination.active.color,onChange:a=>i({...e,pagination:{...e.pagination,active:{...e.pagination.active,color:a}}})},{label:(0,n.__)("Hover","walker-core"),value:e.pagination.active.colorHover,onChange:a=>i({...e,pagination:{...e.pagination,active:{...e.pagination.active,colorHover:a}}})},{label:(0,n.__)("Border (Hover)","walker-core"),value:e.pagination.active.borderColorHover,onChange:a=>i({...e,pagination:{...e.pagination,active:{...e.pagination.active,borderColorHover:a}}})}]})))))),e.navigation.enabled&&(0,a.createElement)(t.PanelBody,{title:(0,n.__)("Navigation Styles","walker-core"),initialOpen:!1},(0,a.createElement)(t.ToggleControl,{label:(0,n.__)("Show on Hover","walker-core"),checked:e.navigation.hoverShow,onChange:a=>i({...e,navigation:{...e.navigation,hoverShow:a}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Box Width","walker-core"),min:10,max:300,step:1,value:e.navigation.boxWidth,onChange:a=>i({...e,navigation:{...e.navigation,boxWidth:Math.abs(a)}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Box Height","walker-core"),min:10,max:300,step:1,value:e.navigation.boxHeight,onChange:a=>i({...e,navigation:{...e.navigation,boxHeight:Math.abs(a)}})}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Icon Size","walker-core"),min:1,max:300,step:1,value:e.navigation.size,onChange:a=>i({...e,navigation:{...e.navigation,size:Math.abs(a)}})}),(0,a.createElement)(t.__experimentalBorderControl,{className:"walker-core__border-control",enableAlpha:!0,isCompact:!0,shouldSanitizeBorder:!0,label:(0,n.__)("Border","walker-core"),value:e.navigation.border,onChange:a=>{i(void 0===a?{...e,navigation:{...e.navigation,border:{width:"",style:"",color:""}}}:{...e,navigation:{...e.navigation,border:a}})}}),(0,a.createElement)(t.RangeControl,{label:(0,n.__)("Border Radius","walker-core"),min:0,max:100,step:1,value:e.navigation.borderRadius,onChange:a=>i({...e,navigation:{...e.navigation,borderRadius:Math.abs(a)}})}),(0,a.createElement)(o.PanelColorSettings,{className:"walker-core__color-control",title:(0,n.__)("Color","walker-core"),enableAlpha:!0,colorSettings:[{label:(0,n.__)("Icon (Default)","walker-core"),value:e.navigation.color,onChange:a=>i({...e,navigation:{...e.navigation,color:a}})},{label:(0,n.__)("Icon (Hover)","walker-core"),value:e.navigation.colorHover,onChange:a=>i({...e,navigation:{...e.navigation,colorHover:a}})},{label:(0,n.__)("Background (Default)","walker-core"),value:e.navigation.boxColor,onChange:a=>i({...e,navigation:{...e.navigation,boxColor:a}})},{label:(0,n.__)("Background (Hover)","walker-core"),value:e.navigation.boxColorHover,onChange:a=>i({...e,navigation:{...e.navigation,boxColorHover:a}})},{label:(0,n.__)("Border (Hover)","walker-core"),value:e.navigation.borderColorHover,onChange:a=>i({...e,navigation:{...e.navigation,borderColorHover:a}})}]})))))},save:function({attributes:e}){const n="walkerCore_"+e.clientId.replace(/-/gi,"_");return(0,a.createElement)(a.Fragment,null,(0,a.createElement)("div",{...o.useBlockProps.save()},(0,a.createElement)("div",{className:`walker-core-post-block layout-${e.layout} ${"grid"===e.layout&&e.gridOptions.masonry?"has-masonry":""} ${"carousel"===e.layout&&e.navigation.hoverShow?"nav-hover-show":""}  ${"carousel"===e.layout?"carousel-direction-"+e.sliderOptions.direction:""}`,id:n},(0,a.createElement)(o.InnerBlocks.Content,null),"carousel"===e.layout&&(0,a.createElement)(a.Fragment,null,e.navigation.enabled&&(0,a.createElement)(a.Fragment,null,(0,a.createElement)("div",{className:"swiper-button-prev"}),(0,a.createElement)("div",{className:"swiper-button-next"})),e.pagination.enabled&&(0,a.createElement)("div",{className:"swiper-pagination"})))))}})}},n={};function o(e){var t=n[e];if(void 0!==t)return t.exports;var i=n[e]={exports:{}};return a[e](i,i.exports,o),i.exports}o.m=a,e=[],o.O=(a,n,t,i)=>{if(!n){var r=1/0;for(p=0;p<e.length;p++){for(var[n,t,i]=e[p],l=!0,s=0;s<n.length;s++)(!1&i||r>=i)&&Object.keys(o.O).every((e=>o.O[e](n[s])))?n.splice(s--,1):(l=!1,i<r&&(r=i));if(l){e.splice(p--,1);var c=t();void 0!==c&&(a=c)}}return a}i=i||0;for(var p=e.length;p>0&&e[p-1][2]>i;p--)e[p]=e[p-1];e[p]=[n,t,i]},o.o=(e,a)=>Object.prototype.hasOwnProperty.call(e,a),(()=>{var e={57:0,350:0};o.O.j=a=>0===e[a];var a=(a,n)=>{var t,i,[r,l,s]=n,c=0;if(r.some((a=>0!==e[a]))){for(t in l)o.o(l,t)&&(o.m[t]=l[t]);if(s)var p=s(o)}for(a&&a(n);c<r.length;c++)i=r[c],o.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return o.O(p)},n=globalThis.webpackChunkpost_carousel=globalThis.webpackChunkpost_carousel||[];n.forEach(a.bind(null,0)),n.push=a.bind(null,n.push.bind(n))})();var t=o.O(void 0,[350],(()=>o(359)));t=o.O(t)})();