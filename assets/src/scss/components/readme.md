## banner
**sectionClass**:  
banner--big — для увеличенной высоты блока 

**title** — заголовок  
**text** — текст под заголовком  

**buttonClass**:  
btn--disable — чтобы отключить кнопку  
btn--transparent — прозрачная кнопка  

**button-text** — текст кнопки

```
<%=_.template(require('../templates/components/banner.html'))({
    sectionClass: "",
    title: "",
    text: "",
    buttonText: "",
}) %>
```

___

## about
блок с картинкой слева и текстом справа

**subtitle** — дополнительный заголовок над основным  
**title** — заголовок блока  
**text** — текст блока
**img** — путь для изображения

```
<%=_.template(require('../templates/components/about.html'))({
        subtitle: "",
        title: "",
        "text": "",
        "img": "",
}) %>
```

___

## green_banner
блок с зелёной заливкой и линейным паттерном

**sectionClass**:  
green--with-top-h — показать верхний подзаголовок  
green--with-btm-h — показать нижний подзаголовок  
green--with-circle — показать кнопку со стрелкой вниз  
green--small-padding — уменьшенный паддинг сверху и снизу  

**topSubtitle** — текст верхнего подзаголовка  
**title** — текст заголовка
**bottomSubtitle** — текст нижнего подзаголовка
 
```
<%=_.template(require('../templates/components/green_banner.html'))({
        sectionClass: "",
        topSubtitle: "",
        title: "",
        bottomSubtitle: "",
}) %>
```