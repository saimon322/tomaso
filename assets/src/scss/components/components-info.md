## banner
**sectionClass**:  
banner--big — для увеличенной высоты блока

**title** — заголовок

**text** — текст под заголовком

**buttonClass**:  
btn--disable — чтобы отключить кнопку  
btn--transparent — прозрачная кнопка  
*классы можно комбинировать через пробел*

**button-text** — текст кнопки

```
<%=_.template(require('../templates/components/banner.html'))({
    sectionClass: "",
    title: "",
    text: "",
    buttonText: "",
}) %>
```