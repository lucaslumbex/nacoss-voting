(function(){var template=Handlebars.template,templates=Handlebars.templates=Handlebars.templates||{};templates["show"]=template({compiler:[7,">= 4.0.0"],main:function(container,depth0,helpers,partials,data){var helper,alias1=depth0!=null?depth0:{},alias2=helpers.helperMissing,alias3=container.escapeExpression,alias4="function";return"<tr>\n  <td>\n    "+alias3((helpers.formatDate||depth0&&depth0.formatDate||alias2).call(alias1,depth0!=null?depth0.date:depth0,{name:"formatDate",hash:{month:"short",day:"numeric"},data:data}))+"\n  </td>\n  <td>\n    "+alias3((helper=(helper=helpers.venue||(depth0!=null?depth0.venue:depth0))!=null?helper:alias2,typeof helper===alias4?helper.call(alias1,{name:"venue",hash:{},data:data}):helper))+"\n  </td>\n  <td>\n    "+alias3((helper=(helper=helpers.location||(depth0!=null?depth0.location:depth0))!=null?helper:alias2,typeof helper===alias4?helper.call(alias1,{name:"location",hash:{},data:data}):helper))+'\n  </td>\n  <td>\n    <a href="'+alias3((helper=(helper=helpers.ticketLink||(depth0!=null?depth0.ticketLink:depth0))!=null?helper:alias2,typeof helper===alias4?helper.call(alias1,{name:"ticketLink",hash:{},data:data}):helper))+'" target="_blank">'+alias3((helper=(helper=helpers.ticketAction||(depth0!=null?depth0.ticketAction:depth0))!=null?helper:alias2,typeof helper===alias4?helper.call(alias1,{name:"ticketAction",hash:{},data:data}):helper))+"</a>\n  </td>\n</tr>\n"},useData:true})})();