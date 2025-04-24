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
## ¿ Cuáles son los distintos tipos de selectores más utilizados?  Ejemplifique cada uno.

### Tipos de selectores CSS más utilizados

Los **selectores** en CSS permiten aplicar estilos a uno o varios elementos HTML.

---

### 🔹Selector de etiqueta o tipo

Selecciona todos los elementos de un tipo específico (etiqueta HTML).

```css
p {
  color: blue;
}
```

### 🔹Selector de clase
Selecciona todos los elementos que tengan una clase específica. Se indica con un punto (.).

```html
<h1 class="titulo">Hola</h1>
<p class="titulo">Esto también se ve grande</p>
```

```css
<h1 class="titulo">Hola</h1>
<p class="titulo">Esto también se ve grande</p>
```
### 🔹Selector de ID
elecciona un único elemento con un ID específico. Se indica con el símbolo #.

```html
<div id="principal">Este fondo es amarillo</div>
```

```css
#principal {
  background-color: yellow;
}
```
### 🔹 Selector universal
Selecciona todos los elementos del documento.

```css
* {
  margin: 0;
  padding: 0;
}
```

## . ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?

Una **pseudo-clase** en CSS permite aplicar estilos a un elemento **en un estado específico**, sin necesidad de añadir una clase o modificar el HTML.

Se escriben después del selector, precedidas por dos puntos `:`.

---

### Ejemplo general

```css
button:hover {
  background-color: lightblue;
/* Aplica el color de fondo azul claro al pasar el mouse sobre un botón. */ 
}
```

### Pseudo-clases más comunes para enlaces en CSS

Estas pseudo-clases se utilizan para aplicar estilos a los enlaces (`<a>`) dependiendo del estado en que se encuentren:

| Pseudo-clase | Descripción                                                                 |
|--------------|------------------------------------------------------------------------------|
| `:link`      | Se aplica a enlaces que **no han sido visitados** por el usuario.           |
| `:visited`   | Se aplica a enlaces que **ya fueron visitados** (clickeados).               |
| `:hover`     | Se aplica cuando el puntero del mouse **pasa por encima** del enlace.       |
| `:active`    | Se aplica mientras el enlace está siendo **presionado** (clickeado).        |
| `:focus`     | Se aplica cuando el enlace tiene el **foco** (ej. al navegar con el teclado).|

> Para un comportamiento correcto, aplicá las pseudo-clases en este orden:
> **`:link` → `:visited` → `:hover` → `:active`**







