## ¿ Qué es CSS y para qué se usa?
**CSS**: son las siglas de hojas de estilo en cascada (Cascading Style Sheets).
Las hojas de estilo es una tecnología que nos permite controlar
la apariencia de una página web.
**CSS** describe como los elementos dispuestos en la página son
presentados al usuario.
Con esté podemos especificar estilos como el tamaño, fuentes,
color, espaciado entre textos y recuadros así como el lugar
donde disponer texto e imágenes en la página.

## CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?
Una regla CSS está compuesta por dos partes principales: el **selector** y el **bloque de declaraciones**.
El selector: nos indica que parte del *HTML* vamos a modificar y el *bloque de declaraciones* siempre inicia con una `{` y finaliza con `}`.
Dentro de las llaves colocaremos todos lo cambios que querramos hacerle al *selector*
```
p {
  color: red;
  font-size: 16px;
}
```
## ¿ Cuáles son las tres formas de dar estilo a un documento?

### Formas de aplicar estilos CSS en HTML

CSS permite aplicar estilos a los documentos HTML de **tres formas principales**, cada una con ventajas y desventajas según el contexto:

---

### 1. Estilo en línea (inline)

Se utiliza el atributo `style` directamente en la etiqueta HTML.

```html
<p style="color: red; font-size: 16px;">Hola mundo</p>
```
### 2. Estilo interno (internal)
Se incluye dentro del archivo HTML, en la etiqueta `<style>`

```html
<head>
  <style>
    p {
      color: blue;
    }
  </style>
</head>
```
### 3. Estilo externo (external)
Se escribe en un archivo .css separado y se vincula al HTML con `<link>`.
```html
<head>
  <link rel="stylesheet" href="estilos.css">
</head>
```



