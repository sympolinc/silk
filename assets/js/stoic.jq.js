(function ($) {
  $.each(['show', 'hide'], function (i, ev) {
    var el = $.fn[ev];
    $.fn[ev] = function () {
      this.trigger(ev);
      return el.apply(this, arguments);
    };
  });
  $.fn.awayClick=function(fn){
    return this.each(function () {
        var self = this;
        $(document).click(function (e) {
            if (!$(e.target).closest(self).length) {
                fn.call(self, e)
            }
        })
    });
  }
})(jQuery);
function Stoic(targ,opts){
  var defs={
    keyNav:false,
    toc:true,
    tocIgnore:'.no-stoic',
    tocSelector:":header",
    tocContext:'body',
    tocUlClass:'list-unmarked',
    tocLiClass:'',
    tocScrollHooks:[],
    spy:true,
    scrollSpeed:300,
    tocActiveClass:'active',
    index:true,
    indexContext:'body',
    toIndex:'lorem',
    indexUlClass:'list-inline',
    indexLiClass:'',
    indexActiveClass:'active',
    indexHighlightClass:'txt-info',
    indexCurrentClass:'txt-info info',
    indexCaseSensitive:true,
    offset:0,
    listType:'<ul/>',
    prefix:'stoic',
    scrolling:'swing'
  },
      self=this,
      options=$.extend({},defs,opts),
      element=$(targ),
      wrapper=$('<div class="' + options.prefix + '-container">'),
      ul=$(options.listType);
  self.init=function(cb){
    if(options.toc){
      self.buildTOC();
      if(options.spy){
        $(document).scroll(function(){
          var from = $(this).scrollTop() + options.offset+5;
          var cur = $(options.tocSelector,options.tocContext).not(options.tocIgnore).map(function(){
            if ($(this).offset().top < from)
              return this;
          });
          cur=cur.last().find('span');
          if(cur && cur.length){
            targ.find('.' + options.tocActiveClass).removeClass(options.tocActiveClass);
            if($(window).scrollTop() + $(window).height() == $(document).height()) {
              $('[href=#' + cur.attr('id') + ']').parent().nextAll('li').last().addClass(options.tocActiveClass)
            }else{
              $('[href=#' + cur.attr('id') + ']').parent().addClass(options.tocActiveClass);
            }
          }

          $.each(options.tocScrollHooks,function(i,item){
            item && $.type(item)==='function'&& item.call(targ);
          });
        });
      }
      if(options.keyNav){
        $(document).keydown(function(e){
          if(e.which===33){
            e.preventDefault();
            targ.find('.' + options.tocActiveClass).prev('li').children('a').click();
          } else if (e.which===34){
            e.preventDefault();
            targ.find('.' + options.tocActiveClass).next('li').children('a').click();           
          }
        })
      }
    }
    if(options.index){
      self.buildIndex();
    }
    return cb && cb();
  };
  self.buildTOC=function(){
    var cElems=$(options.tocSelector,options.tocContext),
        ul=$(options.listType).addClass(options.tocUlClass);
    cElems.each(function(i,el){
      var $el=$(el),
          id=options.prefix + '_' + $el.html().replace(/\W|-/g,'_') + '_' + i;
      if(!$el.is(options.tocIgnore)){
        if(el.id!==id){
          $('<span/>').attr('id',id).appendTo($el);
        }
        $el.css({cursor:'pointer'});
        $el.click(function(){
          var ID=$(this).children('span').attr('id')
          $('[href=#' + ID + "]").click();
        })
        var a=$('<a/>').text($el.text()).attr('href','#' + id).click(function(e){
          e.preventDefault();
          var offset=$($(this).attr('href')).position().top - options.offset-1;
          $('html, body').stop().animate({
            scrollTop:offset
          },{duration:options.scrollSpeed,easing:options.scrolling});
          element.trigger('sf.stoic.select',$(this).attr('href'));
        }),
            li=$('<li/>').addClass(options.tocLiClass + ' stoic-' + el.tagName.toLowerCase()).append(a);
        ul.append(li);
      }
    });
    wrapper.append(ul);
    element.append(wrapper);
    return self;
  };
  self.option=function(name,value){
    if(!name) return;
    if(value!==undefined&&value!==null){
      options[name]=value;
    } else {
      return options[name];
    }
    return self;
  }
  self.buildIndex=function(){
    var ul=$(options.listType).addClass(options.indexUlClass);
    var items=[];
    if($.type(options.toIndex)==='string'){
      items=options.toIndex.split(',');
    } else if($.type(options.toIndex)==='array'){
      items=options.toIndex;
    }
    if(items.length){
      $.each(items,function(i,stt){
        var regex;
        if(options.indexCaseSensitive){
          regex=new RegExp('(' + $.trim(stt) + ')','g');
        } else {
          regex=new RegExp('(' + $.trim(stt) + ')','gi');            
        }
        $(options.indexContext).contents().each(function(o,el){
          
        });
      });
    }
    return self;
  };
  return this;
}
$.fn.stoic=function(option){
  var args=Array.prototype.slice.call(arguments,0);
  args.shift();
  return this.each(function(i,el){
    var $this = $(this);
    var data  = $this.data('sf.stoic');
    if (!data) {$this.data('sf.stoic', (data = new Stoic($this)))}
    if (typeof option == 'string') {return data[option].apply($this,args)}
  });
}