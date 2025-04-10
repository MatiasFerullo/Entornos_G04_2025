# ¿Qué es HTML?

**HTML** (HyperText Markup Language) es el lenguaje de etiquetado usado para crear páginas web. No es un lenguaje de programación, sino un lenguaje que estructura y organiza el contenido de una página web mediante etiquetas.

## ¿Cuándo fue creado?

Fue creado en **1991** por **Tim Berners-Lee**, un científico británico que trabajaba en el **CERN** (Organización Europea para la Investigación Nuclear).

## ¿Cuáles fueron las diferentes versiones de HTML?

- **1991** → Tim Berners-Lee publica la primera versión de HTML (HTML 1.0).  
- **1995** → Aparece HTML 2.0, la primera versión oficial con estándares.  
- **1997** → Llega HTML 3.2, con soporte para tablas y scripts.  
- **1999** → Se lanza HTML 4.01, con mejoras en accesibilidad y estilos CSS.  
- **2008** → Se empieza a desarrollar HTML5, con soporte para videos, audio y gráficos.  
- **2014** → HTML5 se convierte en el estándar oficial, mejorando la compatibilidad con dispositivos móviles.  

La última versión de HTML es **HTML5**, lanzada oficialmente en **2014** por el **World Wide Web Consortium (W3C)** y la **Web Hypertext Application Technology Working Group (WHATWG)**.

### Algunas de las mejoras fueron:

- **Elementos multimedia** → Soporte para audio y video sin plugins  
- **Nuevos elementos semánticos** → Etiquetas como `header`, `footer`, `section`, `article`, etc.  
- **Formularios mejorados** → Etiquetas como `email`, `tel`, `date`, etc.  
- **Almacenamiento local** → Permite almacenar datos en el navegador del usuario  
- **API de geolocalización** → Permite obtener la ubicación geográfica del usuario  

## ¿Cuáles son los principios básicos que el W3C recomienda seguir?

- Uso Semántico y Estructural de las Etiquetas  
- Accesibilidad  
- Validación y Corrección de Errores  
- Compatibilidad con Navegadores  
- Optimización de la Carga y Rendimiento  
- Separación de Contenido, Estructura y Presentación  
- Uso Correcto de Metaetiquetas  
- SEO y Buenas Prácticas para Motores de Búsqueda  

Para más información sobre las buenas prácticas en HTML, consultar con **W3C** o con **MDN (Mozilla Developer Network)**.

---

## Elementos y Atributos Desaprobados y Obsoletos en HTML

### 1. Elementos o Atributos Desaprobados 

Un elemento o atributo desaprobado es aquel que sigue funcionando, pero no se recomienda su uso, ya que se eliminará en futuras versiones de HTML. Su uso está desaconsejado.

**Ejemplo de elemento desaprobado:**

```html
<div align="center">Contenido centrado</div>
```
Este atributo "align" está desaprobado y se recomienda usar CSS para alinear el contenido:

```html
<div style="text-align: center;">Contenido centrado</div>
```

### 2. Elementos o Atributos Obsoletos 

Un elemento u atributo obsoleto es aquel que ya no está permitido en las versiones actuales de HTML. Ya no funciona y debe ser evitado en todo momento.

**Ejemplo de elemento obsoleto:**

```html
<font color="red">Texto en rojo</font>
```

La etiqueta `<font>` está obsoleta y no debe utilizarse. En su lugar, se debe usar CSS:

```html
<span style="color: red;">Texto en rojo</span>
```
---

## Qué es el DTD

Un DTD (*Document Type Definition*) es un conjunto de reglas que define la estructura y los elementos válidos de un documento XML o HTML. Sirve para que los navegadores o validadores sepan cómo interpretar correctamente el contenido de una página.

## cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

Esta especificación es la primera Recomendación HTML 4.01. Incluye cambios no editoriales desde la versión del 24 de abril de HTML 4.0. Por ejemplo, se han hecho algunos cambios en los DTDs. Con este documento quedan obsoletas las versiones previas de HTML 4.0, aunque el W3C seguirá poniendo a disposición del público dichas especificaciones y sus DTDs en su sitio web.

## Qué son los metadatos y cómo se especifican en HTML? 
Los metadatos son datos sobre otros datos. En el contexto de HTML, los metadatos son información que describe el contenido de la página web, pero no se muestra directamente al usuario. Se utilizan principalmente por los navegadores, motores de búsqueda y redes sociales para entender mejor la página.
Los metadatos se colocan en la etiqueta <head> del documento HTML y se usan principalmente las etiquetas `<meta>`, `<title>`, `<link>`, entre otras.




