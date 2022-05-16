<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Toko Cakrawala - Invoice</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="nikibweb">

</head>

<body class="shop_page">
    <style type="text/css">
@charset "UTF-8";
/*-----------------------------------------------------------------------------------

    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.1
    Copyright 2021-2022
	Author URI: https://themeforest.net/user/ashishmaraviya

-----------------------------------------------------------------------------------*/
/*---------------------------------------------------------------------------------
    Included CSS INDEX
-----------------------------------------------------------------------------------

01. Typography
02. Utilities
03. demo 8 css
04. Responsive css
-----------------------------------------------------------------------------------*/
/*-------------------------------------------------
  Fonts Family & Style CSS
---------------------------------------------------*/
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-Thin.ttf") format("truetype");
  font-weight: 100;
  font-style: normal;
}
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-ExtraLight.ttf") format("truetype");
  font-weight: 200;
  font-style: normal;
}
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-Light.ttf");
  font-weight: 300;
  font-style: normal;
}
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-Regular.ttf") format("truetype");
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-Medium.ttf") format("truetype");
  font-weight: 500;
  font-style: normal;
}
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-SemiBold.ttf") format("truetype");
  font-weight: 600;
  font-style: normal;
}
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-Bold.ttf") format("truetype");
  font-weight: 700;
  font-style: normal;
}
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-ExtraBold.ttf") format("truetype");
  font-weight: 800;
  font-style: normal;
}
@font-face {
  font-family: "Poppins, sans-serif";
  src: url("./../fonts/poppins/Poppins-Black.ttf") format("truetype");
  font-weight: 900;
  font-style: normal;
}
@font-face {
  font-family: "Fjalla One";
  src: url("./../fonts/fjalla/FjallaOne-Regular.ttf") format("truetype");
}
@font-face {
  font-family: "Montserrat";
  src: url("./../fonts/montserrat/Montserrat-Regular.ttf") format("truetype");
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "Montserrat";
  src: url("./../fonts/montserrat/Montserrat-SemiBold.ttf") format("truetype");
  font-weight: 700;
  font-style: normal;
}
@font-face {
  font-family: "Montserrat";
  src: url("./../fonts/montserrat/Montserrat-Bold.ttf") format("truetype");
  font-weight: 800;
  font-style: normal;
}
@font-face {
  font-family: "Montserrat";
  src: url("./../fonts/montserrat/Montserrat-ExtraBold.ttf") format("truetype");
  font-weight: 900;
  font-style: normal;
}
@font-face {
  font-family: "Oswald";
  src: url("./../fonts/oswald/Oswald-ExtraLight.ttf") format("truetype");
  font-weight: 200;
  font-style: normal;
}
@font-face {
  font-family: "Oswald";
  src: url("./../fonts/oswald/Oswald-Light.ttf") format("truetype");
  font-weight: 300;
  font-style: normal;
}
@font-face {
  font-family: "Oswald";
  src: url("./../fonts/oswald/Oswald-Regular.ttf");
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "Oswald";
  src: url("./../fonts/oswald/Oswald-Medium.ttf") format("truetype");
  font-weight: 500;
  font-style: normal;
}
@font-face {
  font-family: "Oswald";
  src: url("./../fonts/oswald/Oswald-SemiBold.ttf") format("truetype");
  font-weight: 600;
  font-style: normal;
}
@font-face {
  font-family: "Oswald";
  src: url("./../fonts/oswald/Oswald-Bold.ttf") format("truetype");
  font-weight: 700;
  font-style: normal;
}
/*-------------------------------------------------
  Helper Class
---------------------------------------------------*/
*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: inherit;
  background-color: currentColor;
  border: 0;
  opacity: 0.25;
}

hr:not([size]) {
  height: 1px;
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: calc(1.375rem + 1.5vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.5rem;
  }
}

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 2rem;
  }
}

h3, .h3 {
  font-size: calc(1.3rem + 0.6vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.75rem;
  }
}

h4, .h4 {
  font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.5rem;
  }
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-bs-original-title] {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 0.875em;
}

mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: #0d6efd;
  text-decoration: underline;
}
a:hover {
  color: #0a58ca;
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr /* rtl:ignore */;
  unicode-bidi: bidi-override;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
  font-weight: 700;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]::-webkit-calendar-picker-indicator {
  display: none;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::-webkit-file-upload-button {
  font: inherit;
}

::file-selector-button {
  font: inherit;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d;
}
.blockquote-footer::before {
  content: "— ";
}

body {
  margin: 0 auto;
  background-color: #ffffff;
  font-family: "Poppins, sans-serif";
  font-size: 14px;
  font-weight: 400;
  font-style: normal;
  line-height: 1.625;
  position: relative;
  visibility: visible;
  color: #444444;
  letter-spacing: 0.4px;
  min-height: 100%;
}

* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
*::before {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
*::after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0;
}

hr {
  margin: 10px 0;
  color: inherit;
  background-color: #ffffff;
  border: 0;
  opacity: 0.25;
}
hr:not([size]) {
  height: 1px;
}

h6, .h6 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: 1rem;
  color: #212121;
}

.h6 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: 1rem;
  color: #212121;
}

h5, .h5 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: 1.25rem;
  color: #212121;
}

.h5 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: 1.25rem;
  color: #212121;
}

h4, .h4 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: calc(1.275rem + 0.3vw);
  color: #212121;
}

.h4 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: calc(1.275rem + 0.3vw);
  color: #212121;
}

h3, .h3 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: calc(1.3rem + 0.6vw);
  color: #212121;
}

.h3 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: calc(1.3rem + 0.6vw);
  color: #212121;
}

h2, .h2 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: calc(1.325rem + 0.9vw);
  color: #212121;
}

.h2 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: calc(1.325rem + 0.9vw);
  color: #212121;
}

h1, .h1 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: calc(1.375rem + 1.5vw);
  color: #212121;
}

.h1 {
  margin-top: 0;
  margin-bottom: 5px;
  font-weight: 500;
  line-height: 1.2;
  font-size: calc(1.375rem + 1.5vw);
  color: #212121;
}

p {
  margin-top: 0;
  margin-bottom: 16px;
}
p:last-child {
  margin-bottom: 0;
}

abbr[title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
}

abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol {
  padding-left: 2rem;
  margin-top: 0;
  margin-bottom: 1rem;
  margin-top: 0;
  margin-bottom: 0;
  padding: 0;
  margin: 0;
  list-style: none;
}
ol ol {
  margin-bottom: 0;
}
ol ul {
  margin-bottom: 0;
}

ul {
  padding-left: 2rem;
  margin-top: 0;
  margin-bottom: 1rem;
  margin-top: 0;
  margin-bottom: 0;
  padding: 0;
  margin: 0;
  list-style: none;
}
ul ul {
  margin-bottom: 0;
}
ul ol {
  margin-bottom: 0;
}

dl {
  margin-top: 0;
  margin-bottom: 1rem;
  margin-top: 0;
  margin-bottom: 0;
  padding: 0;
  margin: 0;
  list-style: none;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b {
  font-weight: bold;
}

small, .small {
  font-size: 0.875rem;
}

.small {
  font-size: 0.875rem;
}

mark, .mark {
  padding: 3.2px;
  background-color: #FCF8E3;
}

.mark {
  padding: 3.2px;
  background-color: #FCF8E3;
}

sub {
  position: relative;
  font-size: 0.75rem;
  line-height: 0;
  vertical-align: baseline;
  bottom: -0.25em;
}

sup {
  position: relative;
  font-size: 0.75rem;
  line-height: 0;
  vertical-align: baseline;
  top: -0.5em;
}

a {
  color: #555;
  text-decoration: underline;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  text-decoration: none;
  background-color: transparent;
  border: 0;
  cursor: pointer;
}
a:not([href]):not([class]) {
  color: inherit;
  text-decoration: none;
}
a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}
a > code {
  color: inherit;
}

pre {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875rem;
  -ms-overflow-style: scrollbar;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  font-size: 0.875rem;
  color: #D63384;
  word-wrap: break-word;
}

kbd {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  padding: 3.2px 6.4px;
  font-size: 0.875rem;
  color: #ffffff;
  background-color: #444444;
  border-radius: 3.2px;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
  font-weight: 700;
}

samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  max-width: 100%;
}

svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #6C757D;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

thead {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

tbody {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

tfoot {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

tr {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

td {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
  margin-bottom: 15px;
}

button {
  border-radius: 0;
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  overflow: visible;
  text-transform: none;
  -webkit-appearance: button;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  text-decoration: none;
  background-color: transparent;
  border: 0;
}
button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline: 0px dotted;
  outline: 0px auto -webkit-focus-ring-color;
  -webkit-box-shadow: none;
          box-shadow: none;
}
button:not(:disabled) {
  cursor: pointer;
}

input {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  overflow: visible;
  display: inline-block;
  line-height: 50px;
  height: 50px;
  font-size: 15px;
  width: 100%;
  background: transparent;
  border-radius: 0;
  -webkit-border-radius: 0;
  text-align: left;
  box-shadow: none;
  -webkit-box-shadow: none;
  padding-left: 20px;
  padding-right: 10px;
  outline: 0;
}
input:focus {
  outline: 0px dotted;
  outline: 0px auto -webkit-focus-ring-color;
  -webkit-box-shadow: none;
          box-shadow: none;
}

select {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  text-transform: none;
  word-wrap: normal;
}

optgroup {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  resize: vertical;
  width: 100%;
  padding-left: 20px;
  padding-top: 20px;
  outline: 0;
}

[role=button] {
  cursor: pointer;
}

[list]::-webkit-calendar-picker-indicator {
  display: none;
}

[type=button] {
  -webkit-appearance: button;
}
[type=button]:not(:disabled) {
  cursor: pointer;
}

[type=reset] {
  -webkit-appearance: button;
}
[type=reset]:not(:disabled) {
  cursor: pointer;
}

[type=submit] {
  -webkit-appearance: button;
}
[type=submit]:not(:disabled) {
  cursor: pointer;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
fieldset:disabled .btn {
  pointer-events: none;
  opacity: 0.65;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 8px;
}

.initialism {
  font-size: 0.875rem;
  text-transform: uppercase;
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 4px;
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  border-radius: 4px;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 5px;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875rem;
  color: #6C757D;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.container-xl {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.container-lg {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.container-md {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.container-sm {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-top: 0;
  margin-right: -15px;
  margin-left: -15px;
}
.row > * {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-top: 0;
}

.col {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 0%;
          flex: 1 0 0%;
}

.row-cols-auto > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 33.3333333333%;
}

.row-cols-4 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-auto {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: auto;
}

.col-1 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 8.3333333333%;
}

.col-2 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 16.6666666667%;
}

.col-3 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 33.3333333333%;
}

.col-5 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 41.6666666667%;
}

.col-6 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 58.3333333333%;
}

.col-8 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 66.6666666667%;
}

.col-9 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 83.3333333333%;
}

.col-11 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 91.6666666667%;
}

.col-12 {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.3333333333%;
}

.offset-2 {
  margin-left: 16.6666666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.3333333333%;
}

.offset-5 {
  margin-left: 41.6666666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.3333333333%;
}

.offset-8 {
  margin-left: 66.6666666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.3333333333%;
}

.offset-11 {
  margin-left: 91.6666666667%;
}

.g-0 {
  --bs-gutter-x: 0;
  --bs-gutter-y: 0;
}

.gx-0 {
  --bs-gutter-x: 0;
}

.gy-0 {
  --bs-gutter-y: 0;
}

.g-1 {
  --bs-gutter-x: 5px;
  --bs-gutter-y: 5px;
}

.gx-1 {
  --bs-gutter-x: 5px;
}

.gy-1 {
  --bs-gutter-y: 5px;
}

.g-2 {
  --bs-gutter-x: 10px;
  --bs-gutter-y: 10px;
}

.gx-2 {
  --bs-gutter-x: 10px;
}

.gy-2 {
  --bs-gutter-y: 10px;
}

.g-3 {
  --bs-gutter-x: 15px;
  --bs-gutter-y: 15px;
}

.gx-3 {
  --bs-gutter-x: 15px;
}

.gy-3 {
  --bs-gutter-y: 15px;
}

.g-4 {
  --bs-gutter-x: 20px;
  --bs-gutter-y: 20px;
}

.gx-4 {
  --bs-gutter-x: 20px;
}

.gy-4 {
  --bs-gutter-y: 20px;
}

.g-5 {
  --bs-gutter-x: 25px;
  --bs-gutter-y: 25px;
}

.gx-5 {
  --bs-gutter-x: 25px;
}

.gy-5 {
  --bs-gutter-y: 25px;
}

.g-6 {
  --bs-gutter-x: 30px;
  --bs-gutter-y: 30px;
}

.gx-6 {
  --bs-gutter-x: 30px;
}

.gy-6 {
  --bs-gutter-y: 30px;
}

.g-7 {
  --bs-gutter-x: 35px;
  --bs-gutter-y: 35px;
}

.gx-7 {
  --bs-gutter-x: 35px;
}

.gy-7 {
  --bs-gutter-y: 35px;
}

.g-8 {
  --bs-gutter-x: 40px;
  --bs-gutter-y: 40px;
}

.gx-8 {
  --bs-gutter-x: 40px;
}

.gy-8 {
  --bs-gutter-y: 40px;
}

.g-9 {
  --bs-gutter-x: 45px;
  --bs-gutter-y: 45px;
}

.gx-9 {
  --bs-gutter-x: 45px;
}

.gy-9 {
  --bs-gutter-y: 45px;
}

.g-10 {
  --bs-gutter-x: 50px;
  --bs-gutter-y: 50px;
}

.gx-10 {
  --bs-gutter-x: 50px;
}

.gy-10 {
  --bs-gutter-y: 50px;
}

.table-primary {
  color: #000000;
  border-color: #e6c2a7;
}

.table-secondary {
  color: #000000;
  border-color: #c1c2c5;
}

.table-success {
  color: #000000;
  border-color: #acc7ba;
}

.table-info {
  color: #000000;
  border-color: #a8d8e2;
}

.table-warning {
  color: #000000;
  border-color: #e6d6a7;
}

.table-danger {
  color: #000000;
  border-color: #a7a7a7;
}

.table-light {
  color: #000000;
  border-color: #dfe0e1;
}

.table-dark {
  color: #ffffff;
  border-color: #484e53;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.form-label {
  margin-bottom: 8px;
}

.col-form-label {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: 9px;
  padding-bottom: 9px;
  font-size: 1.25rem;
}

.col-form-label-sm {
  padding-top: 5px;
  padding-bottom: 5px;
  font-size: 0.875rem;
}

.form-text {
  margin-top: 4px;
  font-size: 0.875rem;
  color: #6C757D;
}

.form-control {
  display: block;
  width: 100%;
  min-height: 38px;
  padding: 6px 12px;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #CED4DA;
  -webkit-appearance: none;
  -moz-appearance: none;
       appearance: none;
  border-radius: 4px;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  display: block;
  width: 100%;
  min-height: 45px;
  padding: 6px 80px 6px 20px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.625;
  color: #444444;
  border-radius: 5px;
  background-color: #ffffff;
}
.form-control:focus {
  color: #495057;
  background-color: #ffffff;
  border-color: #ffb984;
  outline: 0;
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
  color: #495057;
  background-color: #ffffff;
  border-color: #ced4da;
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.form-control::-webkit-input-placeholder {
  color: #6C757D;
  opacity: 1;
}
.form-control::-moz-placeholder {
  color: #6C757D;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #6C757D;
  opacity: 1;
}
.form-control::-ms-input-placeholder {
  color: #6C757D;
  opacity: 1;
}
.form-control::placeholder {
  color: #6C757D;
  opacity: 1;
}
.form-control:disabled {
  background-color: #E9ECEF;
  opacity: 1;
}

.form-control[readonly] {
  background-color: #E9ECEF;
  opacity: 1;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 6px 0;
  margin-bottom: 0;
  line-height: 1.5;
  color: #444444;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm {
  padding-right: 0;
  padding-left: 0;
}

.form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: 34px;
  padding: 4px 8px;
  font-size: 0.875rem;
  border-radius: 3.2px;
}

.form-control-lg {
  min-height: 42px;
  padding: 8px 16px;
  font-size: 1.25rem;
  border-radius: 4.8px;
}

.form-control-color {
  max-width: 3rem;
  padding: 6px;
}
.form-control-color::-moz-color-swatch {
  border-radius: 4px;
}
.form-control-color::-webkit-color-swatch {
  border-radius: 4px;
}

.form-select {
  display: block;
  width: 100%;
  height: 38px;
  padding: 6px 28px 6px 12px;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background-color: #ffffff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343A40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 12px center;
  background-size: 16px 12px;
  border: 1px solid #CED4DA;
  border-radius: 4px;
  -webkit-appearance: none;
  -moz-appearance: none;
       appearance: none;
}
.form-select:focus {
  border-color: #ffb984;
  outline: 0;
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
}
.form-select:focus::-ms-value {
  color: #495057;
  background-color: #ffffff;
}
.form-select:disabled {
  color: #6C757D;
  background-color: #E9ECEF;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.form-select[multiple] {
  height: auto;
  padding-right: 12px;
  background-image: none;
}

.form-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 12px;
  background-image: none;
}

.form-select-sm {
  height: 34px;
  padding-top: 4px;
  padding-bottom: 4px;
  padding-left: 8px;
  font-size: 0.875rem;
}

.form-select-lg {
  height: 42px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-left: 16px;
  font-size: 1.25rem;
}

.form-check {
  display: block;
  min-height: 24px;
  padding-left: 24px;
  margin-bottom: 2px;
}
.form-check .form-check-input {
  float: left;
  margin-left: -24px;
}

.form-check-input {
  width: 16px;
  height: 16px;
  margin-top: -7.25px;
  vertical-align: top;
  background-color: #ffffff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  -webkit-appearance: none;
  -moz-appearance: none;
       appearance: none;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
  -webkit-transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.form-check-input:active {
  -webkit-filter: brightness(90%);
          filter: brightness(90%);
}
.form-check-input:focus {
  border-color: #ffb984;
  outline: 0;
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
}
.form-check-input:checked {
  background-color: #555;
  border-color: #555;
}
.form-check-input:checked[type=checkbox] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23FFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23FFF'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  -webkit-filter: none;
          filter: none;
  opacity: 0.5;
}
.form-check-input:disabled ~ .form-check-label {
  opacity: 0.5;
}

.form-check-input[type=checkbox] {
  border-radius: 4px;
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #555;
  border-color: #555;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23FFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}

.form-check-input[type=radio] {
  border-radius: 50%;
}

.form-check-input[disabled] ~ .form-check-label {
  opacity: 0.5;
}

.form-switch {
  padding-left: 40px;
}
.form-switch .form-check-input {
  width: 32px;
  margin-left: -40px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  background-position: left center;
  border-radius: 32px;
}
.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ffb984'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23FFF'/%3e%3c/svg%3e");
}

.form-check-inline {
  display: inline-block;
  margin-right: 16px;
}
.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}
.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check:focus + .btn {
  outline: 0;
}
.btn-check:focus + .btn-primary {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-check:focus + .btn-secondary {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.btn-check:focus + .btn-success {
  color: #ffffff;
  background-color: #136740;
  border-color: #115c39;
  -webkit-box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
          box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
}
.btn-check:focus + .btn-info {
  color: #000000;
  background-color: #2fd3f4;
  border-color: #23d0f3;
  -webkit-box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
          box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
}
.btn-check:focus + .btn-warning {
  color: #000000;
  background-color: #ffcb2d;
  border-color: #ffc721;
  -webkit-box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
          box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
}
.btn-check:focus + .btn-danger {
  color: #ffffff;
  background-color: black;
  border-color: black;
  -webkit-box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
          box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
}
.btn-check:focus + .btn-light {
  color: #000000;
  background-color: white;
  border-color: white;
  -webkit-box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
          box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
}
.btn-check:focus + .btn-dark {
  color: #ffffff;
  background-color: #23272b;
  border-color: #1d2124;
  -webkit-box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
          box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
}
.btn-check:focus + .btn-outline-primary {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
}
.btn-check:focus + .btn-outline-secondary {
  -webkit-box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
}
.btn-check:focus + .btn-outline-success {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
}
.btn-check:focus + .btn-outline-info {
  -webkit-box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
          box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
}
.btn-check:focus + .btn-outline-warning {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
}
.btn-check:focus + .btn-outline-danger {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
}
.btn-check:focus + .btn-outline-light {
  -webkit-box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
}
.btn-check:focus + .btn-outline-dark {
  -webkit-box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
}
.btn-check:checked + .btn-primary {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-check:checked + .btn-secondary {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.btn-check:checked + .btn-success {
  color: #ffffff;
  background-color: #115c39;
  border-color: #0f5133;
}
.btn-check:checked + .btn-success:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
          box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
}
.btn-check:checked + .btn-info {
  color: #000000;
  background-color: #3cd5f4;
  border-color: #23d0f3;
}
.btn-check:checked + .btn-info:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
          box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
}
.btn-check:checked + .btn-warning {
  color: #000000;
  background-color: #ffce3a;
  border-color: #ffc721;
}
.btn-check:checked + .btn-warning:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
          box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
}
.btn-check:checked + .btn-danger {
  color: #ffffff;
  background-color: black;
  border-color: black;
}
.btn-check:checked + .btn-danger:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
          box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
}
.btn-check:checked + .btn-light {
  color: #000000;
  background-color: white;
  border-color: white;
}
.btn-check:checked + .btn-light:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
          box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
}
.btn-check:checked + .btn-dark {
  color: #ffffff;
  background-color: #1d2124;
  border-color: #171a1d;
}
.btn-check:checked + .btn-dark:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
          box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
}
.btn-check:checked + .btn-outline-primary {
  color: #000000;
  background-color: #555;
  border-color: #555;
}
.btn-check:checked + .btn-outline-primary:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
}
.btn-check:checked + .btn-outline-secondary {
  color: #ffffff;
  background-color: #6C757D;
  border-color: #6C757D;
}
.btn-check:checked + .btn-outline-secondary:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
}
.btn-check:checked + .btn-outline-success {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}
.btn-check:checked + .btn-outline-success:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
}
.btn-check:checked + .btn-outline-info {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}
.btn-check:checked + .btn-outline-info:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
          box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
}
.btn-check:checked + .btn-outline-warning {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}
.btn-check:checked + .btn-outline-warning:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
}
.btn-check:checked + .btn-outline-danger {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}
.btn-check:checked + .btn-outline-danger:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
}
.btn-check:checked + .btn-outline-light {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}
.btn-check:checked + .btn-outline-light:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
}
.btn-check:checked + .btn-outline-dark {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}
.btn-check:checked + .btn-outline-dark:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
}
.btn-check:active + .btn-primary {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-check:active + .btn-secondary {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.btn-check:active + .btn-success {
  color: #ffffff;
  background-color: #115c39;
  border-color: #0f5133;
}
.btn-check:active + .btn-success:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
          box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
}
.btn-check:active + .btn-info {
  color: #000000;
  background-color: #3cd5f4;
  border-color: #23d0f3;
}
.btn-check:active + .btn-info:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
          box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
}
.btn-check:active + .btn-warning {
  color: #000000;
  background-color: #ffce3a;
  border-color: #ffc721;
}
.btn-check:active + .btn-warning:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
          box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
}
.btn-check:active + .btn-danger {
  color: #ffffff;
  background-color: black;
  border-color: black;
}
.btn-check:active + .btn-danger:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
          box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
}
.btn-check:active + .btn-light {
  color: #000000;
  background-color: white;
  border-color: white;
}
.btn-check:active + .btn-light:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
          box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
}
.btn-check:active + .btn-dark {
  color: #ffffff;
  background-color: #1d2124;
  border-color: #171a1d;
}
.btn-check:active + .btn-dark:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
          box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
}
.btn-check:active + .btn-outline-primary {
  color: #000000;
  background-color: #555;
  border-color: #555;
}
.btn-check:active + .btn-outline-primary:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
}
.btn-check:active + .btn-outline-secondary {
  color: #ffffff;
  background-color: #6C757D;
  border-color: #6C757D;
}
.btn-check:active + .btn-outline-secondary:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
}
.btn-check:active + .btn-outline-success {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}
.btn-check:active + .btn-outline-success:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
}
.btn-check:active + .btn-outline-info {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}
.btn-check:active + .btn-outline-info:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
          box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
}
.btn-check:active + .btn-outline-warning {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}
.btn-check:active + .btn-outline-warning:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
}
.btn-check:active + .btn-outline-danger {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}
.btn-check:active + .btn-outline-danger:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
}
.btn-check:active + .btn-outline-light {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}
.btn-check:active + .btn-outline-light:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
}
.btn-check:active + .btn-outline-dark {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}
.btn-check:active + .btn-outline-dark:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
}

.form-file {
  --bs-form-file-height: 38px;
  position: relative;
}

.form-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: var(--bs-form-file-height);
  margin: 0;
  opacity: 0;
}
.form-file-input:focus-within ~ .form-file-label {
  border-color: #ffb984;
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
}
.form-file-input:disabled ~ .form-file-label .form-file-text {
  background-color: #E9ECEF;
}

.form-file-input[disabled] ~ .form-file-label .form-file-text {
  background-color: #E9ECEF;
}

.form-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: var(--bs-form-file-height);
  border-color: #CED4DA;
  border-radius: 4px;
}

.form-file-text {
  display: block;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  padding: 6px 12px;
  overflow: hidden;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-overflow: ellipsis;
  white-space: nowrap;
  background-color: #ffffff;
  border-color: inherit;
  border-style: solid;
  border-width: 1px;
  border-top-left-radius: inherit;
  border-bottom-left-radius: inherit;
}

.form-file-button {
  display: block;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.5;
  color: #495057;
  background-color: #E9ECEF;
  border-color: inherit;
  border-style: solid;
  border-width: 1px;
  border-top-right-radius: inherit;
  border-bottom-right-radius: inherit;
}

.form-file-sm {
  --bs-form-file-height: 34px;
  font-size: 0.875rem;
}
.form-file-sm .form-file-text {
  padding: 4px 8px;
}
.form-file-sm .form-file-button {
  padding: 4px 8px;
}

.form-file-lg {
  --bs-form-file-height: 42px;
  font-size: 1.25rem;
}
.form-file-lg .form-file-text {
  padding: 8px 16px;
}
.form-file-lg .form-file-button {
  padding: 8px 16px;
}

.form-range {
  width: 100%;
  height: 24px;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
       appearance: none;
}
.form-range:focus {
  outline: none;
}
.form-range:focus::-webkit-slider-thumb {
  -webkit-box-shadow: 0 0 0 1px #ffffff, 0 0 0 4px rgba(255, 112, 4, 0.25);
          box-shadow: 0 0 0 1px #ffffff, 0 0 0 4px rgba(255, 112, 4, 0.25);
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #ffffff, 0 0 0 4px rgba(255, 112, 4, 0.25);
}
.form-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #ffffff, 0 0 0 4px rgba(255, 112, 4, 0.25);
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 16px;
  height: 16px;
  margin-top: -4px;
  background-color: #555;
  border: 0;
  border-radius: 16px;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  appearance: none;
}
.form-range::-webkit-slider-thumb:active {
  background-color: #ffd6b7;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 8px;
  color: transparent;
  cursor: pointer;
  background-color: #eeeeee;
  border-color: transparent;
  border-radius: 16px;
}
.form-range::-moz-range-thumb {
  width: 16px;
  height: 16px;
  background-color: #555;
  border: 0;
  border-radius: 16px;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
       appearance: none;
}
.form-range::-moz-range-thumb:active {
  background-color: #ffd6b7;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 8px;
  color: transparent;
  cursor: pointer;
  background-color: #eeeeee;
  border-color: transparent;
  border-radius: 16px;
}
.form-range::-ms-thumb {
  width: 16px;
  height: 16px;
  margin-top: 0;
  margin-right: 4px;
  margin-left: 4px;
  background-color: #555;
  border: 0;
  border-radius: 16px;
  -ms-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
.form-range::-ms-thumb:active {
  background-color: #ffd6b7;
}
.form-range::-ms-track {
  width: 100%;
  height: 8px;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 8px;
}
.form-range::-ms-fill-lower {
  background-color: #eeeeee;
  border-radius: 16px;
}
.form-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #eeeeee;
  border-radius: 16px;
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #ADB5BD;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #ADB5BD;
}
.form-range:disabled::-ms-thumb {
  background-color: #ADB5BD;
}

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 6px 12px;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #E9ECEF;
  border: 1px solid #CED4DA;
  border-radius: 4px;
}

.input-group-lg > .form-control {
  min-height: 42px;
  padding: 8px 16px;
  font-size: 1.25rem;
  border-radius: 4.8px;
}
.input-group-lg > .form-select {
  height: 42px;
  padding: 8px 16px;
  font-size: 1.25rem;
  border-radius: 4.8px;
  padding-right: 28px;
}
.input-group-lg > .input-group-text {
  padding: 8px 16px;
  font-size: 1.25rem;
  border-radius: 4.8px;
}
.input-group-lg > .btn {
  padding: 8px 16px;
  font-size: 1.25rem;
  border-radius: 4.8px;
}

.input-group-sm > .form-control {
  min-height: 34px;
  padding: 4px 8px;
  font-size: 0.875rem;
  border-radius: 3.2px;
}
.input-group-sm > .form-select {
  height: 34px;
  padding: 4px 8px;
  font-size: 0.875rem;
  border-radius: 3.2px;
  padding-right: 28px;
}
.input-group-sm > .input-group-text {
  padding: 4px 8px;
  font-size: 0.875rem;
  border-radius: 3.2px;
}
.input-group-sm > .btn {
  padding: 4px 8px;
  font-size: 0.875rem;
  border-radius: 3.2px;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 4px;
  font-size: 0.875rem;
  color: #198754;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 2.5px 5px;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  color: #ffffff;
  background-color: rgba(25, 135, 84, 0.9);
  border-radius: 4px;
}

.was-validated:valid ~ .valid-feedback {
  display: block;
}
.was-validated:valid ~ .valid-tooltip {
  display: block;
}
.was-validated .form-control:valid {
  border-color: #198754;
  padding-right: 36px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 9px center;
  background-size: 18px 18px;
}
.was-validated .form-control:valid:focus {
  border-color: #198754;
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
}
.was-validated .form-control:invalid {
  border-color: #050505;
  padding-right: 36px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23050505' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23050505' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 9px center;
  background-size: 18px 18px;
}
.was-validated .form-control:invalid:focus {
  border-color: #050505;
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
}
.was-validated textarea.form-control:valid {
  padding-right: 36px;
  background-position: top 9px right 9px;
}
.was-validated textarea.form-control:invalid {
  padding-right: 36px;
  background-position: top 9px right 9px;
}
.was-validated .form-select:valid {
  border-color: #198754;
  padding-right: 49px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343A40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 12px center, center right 28px;
  background-size: 16px 12px, 18px 18px;
}
.was-validated .form-select:valid:focus {
  border-color: #198754;
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
}
.was-validated .form-select:invalid {
  border-color: #050505;
  padding-right: 49px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343A40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23050505' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23050505' stroke='none'/%3e%3c/svg%3e");
  background-position: right 12px center, center right 28px;
  background-size: 16px 12px, 18px 18px;
}
.was-validated .form-select:invalid:focus {
  border-color: #050505;
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
}
.was-validated .form-check-input:valid {
  border-color: #198754;
}
.was-validated .form-check-input:valid:checked {
  background-color: #198754;
}
.was-validated .form-check-input:valid:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label {
  color: #198754;
}
.was-validated .form-check-input:invalid {
  border-color: #050505;
}
.was-validated .form-check-input:invalid:checked {
  background-color: #050505;
}
.was-validated .form-check-input:invalid:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label {
  color: #050505;
}
.was-validated .form-file-input:valid ~ .form-file-label {
  border-color: #198754;
}
.was-validated .form-file-input:valid:focus ~ .form-file-label {
  border-color: #198754;
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
}
.was-validated .form-file-input:invalid ~ .form-file-label {
  border-color: #050505;
}
.was-validated .form-file-input:invalid:focus ~ .form-file-label {
  border-color: #050505;
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
}
.was-validated:invalid ~ .invalid-feedback {
  display: block;
}
.was-validated:invalid ~ .invalid-tooltip {
  display: block;
}

.is-valid ~ .valid-feedback {
  display: block;
}
.is-valid ~ .valid-tooltip {
  display: block;
}

.form-control.is-valid {
  border-color: #198754;
  padding-right: 36px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 9px center;
  background-size: 18px 18px;
}
.form-control.is-valid:focus {
  border-color: #198754;
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
}

textarea.form-control.is-valid {
  padding-right: 36px;
  background-position: top 9px right 9px;
}

.form-select.is-valid {
  border-color: #198754;
  padding-right: 49px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343A40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 12px center, center right 28px;
  background-size: 16px 12px, 18px 18px;
}
.form-select.is-valid:focus {
  border-color: #198754;
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
}

.form-check-input.is-valid {
  border-color: #198754;
}
.form-check-input.is-valid:checked {
  background-color: #198754;
}
.form-check-input.is-valid:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
}
.form-check-input.is-valid ~ .form-check-label {
  color: #198754;
}

.form-file-input.is-valid ~ .form-file-label {
  border-color: #198754;
}
.form-file-input.is-valid:focus ~ .form-file-label {
  border-color: #198754;
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 4px;
  font-size: 0.875rem;
  color: #050505;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 2.5px 5px;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  color: #ffffff;
  background-color: rgba(5, 5, 5, 0.9);
  border-radius: 4px;
}

.is-invalid ~ .invalid-feedback {
  display: block;
}
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.form-control.is-invalid {
  border-color: #050505;
  padding-right: 36px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23050505' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23050505' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 9px center;
  background-size: 18px 18px;
}
.form-control.is-invalid:focus {
  border-color: #050505;
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
}

textarea.form-control.is-invalid {
  padding-right: 36px;
  background-position: top 9px right 9px;
}

.form-select.is-invalid {
  border-color: #050505;
  padding-right: 49px;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343A40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23050505' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23050505' stroke='none'/%3e%3c/svg%3e");
  background-position: right 12px center, center right 28px;
  background-size: 16px 12px, 18px 18px;
}
.form-select.is-invalid:focus {
  border-color: #050505;
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
}

.form-check-input.is-invalid {
  border-color: #050505;
}
.form-check-input.is-invalid:checked {
  background-color: #050505;
}
.form-check-input.is-invalid:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
}
.form-check-input.is-invalid ~ .form-check-label {
  color: #050505;
}

.form-file-input.is-invalid ~ .form-file-label {
  border-color: #050505;
}
.form-file-input.is-invalid:focus ~ .form-file-label {
  border-color: #050505;
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.25);
}

.btn {
  display: inline-block;
  font-weight: 400;
  line-height: 1.5;
  color: #444444;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
   -ms-user-select: none;
       user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 6px 12px;
  font-size: 1rem;
  border-radius: 4px;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.btn:hover {
  color: #444444;
}
.btn:focus {
  outline: 0;
}
.btn:disabled {
  pointer-events: none;
  opacity: 0.65;
}
.btn .badge {
  position: relative;
  top: -1px;
}

.btn.disabled {
  pointer-events: none;
  opacity: 0.65;
}

.btn-primary {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-primary:hover {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.btn-primary:focus {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-primary:active {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-primary:disabled {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}

.btn-primary.active {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}

.show > .btn-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.show > .btn-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.show > .btn-success.dropdown-toggle {
  color: #ffffff;
  background-color: #115c39;
  border-color: #0f5133;
}
.show > .btn-success.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
          box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
}
.show > .btn-info.dropdown-toggle {
  color: #000000;
  background-color: #3cd5f4;
  border-color: #23d0f3;
}
.show > .btn-info.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
          box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
}
.show > .btn-warning.dropdown-toggle {
  color: #000000;
  background-color: #ffce3a;
  border-color: #ffc721;
}
.show > .btn-warning.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
          box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
}
.show > .btn-danger.dropdown-toggle {
  color: #ffffff;
  background-color: black;
  border-color: black;
}
.show > .btn-danger.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
          box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
}
.show > .btn-light.dropdown-toggle {
  color: #000000;
  background-color: white;
  border-color: white;
}
.show > .btn-light.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
          box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
}
.show > .btn-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #1d2124;
  border-color: #171a1d;
}
.show > .btn-dark.dropdown-toggle:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
          box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
}

.btn-primary.disabled {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}

.btn-secondary {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.btn-secondary:hover {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-secondary:focus {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.btn-secondary:active {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.btn-secondary:disabled {
  color: #ffffff;
  background-color: #6C757D;
  border-color: #6C757D;
}

.btn-secondary.active {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}

.btn-secondary.disabled {
  color: #ffffff;
  background-color: #6C757D;
  border-color: #6C757D;
}

.btn-success {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}
.btn-success:hover {
  color: #ffffff;
  background-color: #136740;
  border-color: #115c39;
}
.btn-success:focus {
  color: #ffffff;
  background-color: #136740;
  border-color: #115c39;
  -webkit-box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
          box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
}
.btn-success:active {
  color: #ffffff;
  background-color: #115c39;
  border-color: #0f5133;
}
.btn-success:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
          box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
}
.btn-success:disabled {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}

.btn-success.active {
  color: #ffffff;
  background-color: #115c39;
  border-color: #0f5133;
}
.btn-success.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
          box-shadow: 0 0 0 4px rgba(60, 153, 110, 0.5);
}

.btn-success.disabled {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}

.btn-info {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}
.btn-info:hover {
  color: #000000;
  background-color: #2fd3f4;
  border-color: #23d0f3;
}
.btn-info:focus {
  color: #000000;
  background-color: #2fd3f4;
  border-color: #23d0f3;
  -webkit-box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
          box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
}
.btn-info:active {
  color: #000000;
  background-color: #3cd5f4;
  border-color: #23d0f3;
}
.btn-info:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
          box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
}
.btn-info:disabled {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}

.btn-info.active {
  color: #000000;
  background-color: #3cd5f4;
  border-color: #23d0f3;
}
.btn-info.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
          box-shadow: 0 0 0 4px rgba(11, 172, 204, 0.5);
}

.btn-info.disabled {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}

.btn-warning {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}
.btn-warning:hover {
  color: #000000;
  background-color: #ffcb2d;
  border-color: #ffc721;
}
.btn-warning:focus {
  color: #000000;
  background-color: #ffcb2d;
  border-color: #ffc721;
  -webkit-box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
          box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
}
.btn-warning:active {
  color: #000000;
  background-color: #ffce3a;
  border-color: #ffc721;
}
.btn-warning:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
          box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
}
.btn-warning:disabled {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}

.btn-warning.active {
  color: #000000;
  background-color: #ffce3a;
  border-color: #ffc721;
}
.btn-warning.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
          box-shadow: 0 0 0 4px rgba(217, 164, 6, 0.5);
}

.btn-warning.disabled {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}

.btn-danger {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}
.btn-danger:hover {
  color: #ffffff;
  background-color: black;
  border-color: black;
}
.btn-danger:focus {
  color: #ffffff;
  background-color: black;
  border-color: black;
  -webkit-box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
          box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
}
.btn-danger:active {
  color: #ffffff;
  background-color: black;
  border-color: black;
}
.btn-danger:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
          box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
}
.btn-danger:disabled {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}

.btn-danger.active {
  color: #ffffff;
  background-color: black;
  border-color: black;
}
.btn-danger.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
          box-shadow: 0 0 0 4px rgba(43, 43, 43, 0.5);
}

.btn-danger.disabled {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}

.btn-light {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}
.btn-light:hover {
  color: #000000;
  background-color: white;
  border-color: white;
}
.btn-light:focus {
  color: #000000;
  background-color: white;
  border-color: white;
  -webkit-box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
          box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
}
.btn-light:active {
  color: #000000;
  background-color: white;
  border-color: white;
}
.btn-light:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
          box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
}
.btn-light:disabled {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}

.btn-light.active {
  color: #000000;
  background-color: white;
  border-color: white;
}
.btn-light.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
          box-shadow: 0 0 0 4px rgba(211, 212, 213, 0.5);
}

.btn-light.disabled {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}

.btn-dark {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}
.btn-dark:hover {
  color: #ffffff;
  background-color: #23272b;
  border-color: #1d2124;
}
.btn-dark:focus {
  color: #ffffff;
  background-color: #23272b;
  border-color: #1d2124;
  -webkit-box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
          box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
}
.btn-dark:active {
  color: #ffffff;
  background-color: #1d2124;
  border-color: #171a1d;
}
.btn-dark:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
          box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
}
.btn-dark:disabled {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}

.btn-dark.active {
  color: #ffffff;
  background-color: #1d2124;
  border-color: #171a1d;
}
.btn-dark.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
          box-shadow: 0 0 0 4px rgba(82, 88, 93, 0.5);
}

.btn-dark.disabled {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}

.btn-outline-primary {
  color: #555;
  border-color: #555;
}
.btn-outline-primary:hover {
  color: #000000;
  background-color: #555;
  border-color: #555;
}
.btn-outline-primary:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
}
.btn-outline-primary:active {
  color: #000000;
  background-color: #555;
  border-color: #555;
}
.btn-outline-primary:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
}
.btn-outline-primary:disabled {
  color: #555;
  background-color: transparent;
}

.btn-outline-primary.active {
  color: #000000;
  background-color: #555;
  border-color: #555;
}
.btn-outline-primary.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
}

.btn-outline-primary.dropdown-toggle.show {
  color: #000000;
  background-color: #555;
  border-color: #555;
}
.btn-outline-primary.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.5);
}

.btn-outline-primary.disabled {
  color: #555;
  background-color: transparent;
}

.btn-outline-secondary {
  color: #6C757D;
  border-color: #6C757D;
}
.btn-outline-secondary:hover {
  color: #ffffff;
  background-color: #6C757D;
  border-color: #6C757D;
}
.btn-outline-secondary:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
}
.btn-outline-secondary:active {
  color: #ffffff;
  background-color: #6C757D;
  border-color: #6C757D;
}
.btn-outline-secondary:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
}
.btn-outline-secondary:disabled {
  color: #6C757D;
  background-color: transparent;
}

.btn-outline-secondary.active {
  color: #ffffff;
  background-color: #6C757D;
  border-color: #6C757D;
}
.btn-outline-secondary.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.dropdown-toggle.show {
  color: #ffffff;
  background-color: #6C757D;
  border-color: #6C757D;
}
.btn-outline-secondary.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
          box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled {
  color: #6C757D;
  background-color: transparent;
}

.btn-outline-success {
  color: #198754;
  border-color: #198754;
}
.btn-outline-success:hover {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}
.btn-outline-success:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
}
.btn-outline-success:active {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}
.btn-outline-success:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
}
.btn-outline-success:disabled {
  color: #198754;
  background-color: transparent;
}

.btn-outline-success.active {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}
.btn-outline-success.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
}

.btn-outline-success.dropdown-toggle.show {
  color: #ffffff;
  background-color: #198754;
  border-color: #198754;
}
.btn-outline-success.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
          box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.5);
}

.btn-outline-success.disabled {
  color: #198754;
  background-color: transparent;
}

.btn-outline-info {
  color: #0DCAF0;
  border-color: #0DCAF0;
}
.btn-outline-info:hover {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}
.btn-outline-info:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
          box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
}
.btn-outline-info:active {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}
.btn-outline-info:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
          box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
}
.btn-outline-info:disabled {
  color: #0DCAF0;
  background-color: transparent;
}

.btn-outline-info.active {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}
.btn-outline-info.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
          box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
}

.btn-outline-info.dropdown-toggle.show {
  color: #000000;
  background-color: #0DCAF0;
  border-color: #0DCAF0;
}
.btn-outline-info.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
          box-shadow: 0 0 0 4px rgba(13, 202, 240, 0.5);
}

.btn-outline-info.disabled {
  color: #0DCAF0;
  background-color: transparent;
}

.btn-outline-warning {
  color: #FFC107;
  border-color: #FFC107;
}
.btn-outline-warning:hover {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}
.btn-outline-warning:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
}
.btn-outline-warning:active {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}
.btn-outline-warning:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
}
.btn-outline-warning:disabled {
  color: #FFC107;
  background-color: transparent;
}

.btn-outline-warning.active {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}
.btn-outline-warning.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
}

.btn-outline-warning.dropdown-toggle.show {
  color: #000000;
  background-color: #FFC107;
  border-color: #FFC107;
}
.btn-outline-warning.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
          box-shadow: 0 0 0 4px rgba(255, 193, 7, 0.5);
}

.btn-outline-warning.disabled {
  color: #FFC107;
  background-color: transparent;
}

.btn-outline-danger {
  color: #050505;
  border-color: #050505;
}
.btn-outline-danger:hover {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}
.btn-outline-danger:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
}
.btn-outline-danger:active {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}
.btn-outline-danger:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
}
.btn-outline-danger:disabled {
  color: #050505;
  background-color: transparent;
}

.btn-outline-danger.active {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}
.btn-outline-danger.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
}

.btn-outline-danger.dropdown-toggle.show {
  color: #ffffff;
  background-color: #050505;
  border-color: #050505;
}
.btn-outline-danger.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
          box-shadow: 0 0 0 4px rgba(5, 5, 5, 0.5);
}

.btn-outline-danger.disabled {
  color: #050505;
  background-color: transparent;
}

.btn-outline-light {
  color: #F8F9FA;
  border-color: #F8F9FA;
}
.btn-outline-light:hover {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}
.btn-outline-light:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
}
.btn-outline-light:active {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}
.btn-outline-light:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
}
.btn-outline-light:disabled {
  color: #F8F9FA;
  background-color: transparent;
}

.btn-outline-light.active {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}
.btn-outline-light.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
}

.btn-outline-light.dropdown-toggle.show {
  color: #000000;
  background-color: #F8F9FA;
  border-color: #F8F9FA;
}
.btn-outline-light.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
          box-shadow: 0 0 0 4px rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled {
  color: #F8F9FA;
  background-color: transparent;
}

.btn-outline-dark {
  color: #343A40;
  border-color: #343A40;
}
.btn-outline-dark:hover {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}
.btn-outline-dark:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
}
.btn-outline-dark:active {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}
.btn-outline-dark:active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
}
.btn-outline-dark:disabled {
  color: #343A40;
  background-color: transparent;
}

.btn-outline-dark.active {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}
.btn-outline-dark.active:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.dropdown-toggle.show {
  color: #ffffff;
  background-color: #343A40;
  border-color: #343A40;
}
.btn-outline-dark.dropdown-toggle.show:focus {
  -webkit-box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
          box-shadow: 0 0 0 4px rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled {
  color: #343A40;
  background-color: transparent;
}

.btn-link {
  font-weight: 400;
  color: #555;
  text-decoration: underline;
}
.btn-link:hover {
  color: #b74f00;
}
.btn-link:disabled {
  color: #6C757D;
}

.btn-link.disabled {
  color: #6C757D;
}

.btn-lg {
  padding: 8px 16px;
  font-size: 1.25rem;
  border-radius: 4.8px;
}
.btn-lg + .dropdown-toggle-split {
  padding-right: 12px;
  padding-left: 12px;
}

.btn-group-lg > .btn {
  padding: 8px 16px;
  font-size: 1.25rem;
  border-radius: 4.8px;
}
.btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 12px;
  padding-left: 12px;
}

.btn-sm {
  padding: 4px 8px;
  font-size: 0.875rem;
  border-radius: 3.2px;
}
.btn-sm + .dropdown-toggle-split {
  padding-right: 6px;
  padding-left: 6px;
}

.btn-group-sm > .btn {
  padding: 4px 8px;
  font-size: 0.875rem;
  border-radius: 3.2px;
}
.btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 6px;
  padding-left: 6px;
}

.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 8px;
}

.fade {
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  transition: height 0.35s ease;
}

.dropup {
  position: relative;
}
.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 2px;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 4.08px;
  vertical-align: 4.08px;
  content: "";
  border-top: 0;
  border-right: 4.8px solid transparent;
  border-bottom: 4.8px solid;
  border-left: 4.8px solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropup .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropright {
  position: relative;
}
.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 2px;
}
.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 4.08px;
  vertical-align: 4.08px;
  content: "";
  border-top: 4.8px solid transparent;
  border-right: 0;
  border-bottom: 4.8px solid transparent;
  border-left: 4.8px solid;
  vertical-align: 0;
}
.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropdown {
  position: relative;
}

.dropleft {
  position: relative;
}
.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 2px;
}
.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 4.08px;
  vertical-align: 4.08px;
  content: "";
  display: none;
}
.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 4.08px;
  vertical-align: 4.08px;
  content: "";
  border-top: 4.8px solid transparent;
  border-right: 4.8px solid;
  border-bottom: 4.8px solid transparent;
  vertical-align: 0;
}
.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 4.08px;
  vertical-align: 4.08px;
  content: "";
  border-top: 4.8px solid;
  border-right: 4.8px solid transparent;
  border-bottom: 0;
  border-left: 4.8px solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  min-width: 160px;
  padding: 8px 0;
  margin: 2px 0 0;
  font-size: 1rem;
  color: #444444;
  text-align: left;
  list-style: none;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

.dropdown-menu[x-placement^=top] {
  right: auto;
  bottom: auto;
}

.dropdown-menu[x-placement^=right] {
  right: auto;
  bottom: auto;
}

.dropdown-menu[x-placement^=bottom] {
  right: auto;
  bottom: auto;
}

.dropdown-menu[x-placement^=left] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 5px 0;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.15);
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 2.5px 10px;
  clear: both;
  font-weight: 400;
  color: #444444;
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover {
  color: #3a3a3a;
  background-color: #F8F9FA;
}
.dropdown-item:focus {
  color: #3a3a3a;
  background-color: #F8F9FA;
}
.dropdown-item:active {
  color: #ffffff;
  text-decoration: none;
  background-color: #555;
}
.dropdown-item:disabled {
  color: #6C757D;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-item.active {
  color: #ffffff;
  text-decoration: none;
  background-color: #555;
}

.dropdown-item.disabled {
  color: #6C757D;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 8px 10px;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6C757D;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 2.5px 10px;
  color: #444444;
}

.dropdown-menu-dark {
  color: #eeeeee;
  background-color: #343A40;
  border-color: rgba(0, 0, 0, 0.15);
}
.dropdown-menu-dark .dropdown-item {
  color: #eeeeee;
}
.dropdown-menu-dark .dropdown-item:hover {
  color: #ffffff;
  background-color: rgba(255, 255, 255, 0.15);
}
.dropdown-menu-dark .dropdown-item:focus {
  color: #ffffff;
  background-color: rgba(255, 255, 255, 0.15);
}
.dropdown-menu-dark .dropdown-item:active {
  color: #ffffff;
  background-color: #555;
}
.dropdown-menu-dark .dropdown-item:disabled {
  color: #ADB5BD;
}
.dropdown-menu-dark .dropdown-item.active {
  color: #ffffff;
  background-color: #555;
}
.dropdown-menu-dark .dropdown-item.disabled {
  color: #ADB5BD;
}
.dropdown-menu-dark .dropdown-divider {
  border-color: rgba(0, 0, 0, 0.15);
}
.dropdown-menu-dark .dropdown-item-text {
  color: #eeeeee;
}
.dropdown-menu-dark .dropdown-header {
  color: #ADB5BD;
}

.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.btn-group-vertical > .btn {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 100%;
}
.btn-group-vertical > .btn:hover {
  z-index: 1;
}
.btn-group-vertical > .btn:focus {
  z-index: 1;
}
.btn-group-vertical > .btn:active {
  z-index: 1;
}
.btn-group-vertical > .btn:not(:first-child) {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-check:checked + .btn {
  z-index: 1;
}
.btn-group-vertical > .btn-check:focus + .btn {
  z-index: 1;
}
.btn-group-vertical > .btn.active {
  z-index: 1;
}
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.dropdown-toggle-split {
  padding-right: 9px;
  padding-left: 9px;
}
.dropdown-toggle-split::after {
  margin-left: 0;
}

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 8px 16px;
  text-decoration: none;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}

.nav-link.disabled {
  color: #6C757D;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #eeeeee;
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  border: 1px solid transparent;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.nav-tabs .nav-link:hover {
  border-color: #E9ECEF #E9ECEF #eeeeee;
}
.nav-tabs .nav-link:focus {
  border-color: #E9ECEF #E9ECEF #eeeeee;
}
.nav-tabs .nav-link.disabled {
  color: #6C757D;
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active {
  color: #495057;
  background-color: #ffffff;
  border-color: #eeeeee #eeeeee #ffffff;
}
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #ffffff;
  border-color: #eeeeee #eeeeee #ffffff;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 4px;
}
.nav-pills .nav-link.active {
  color: #ffffff;
  background-color: #555;
}
.nav-pills .show > .nav-link {
  color: #ffffff;
  background-color: #555;
}

.nav-fill > .nav-link {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  text-align: center;
}
.nav-fill .nav-item {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  text-align: center;
}
.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-top: 5px;
  padding-bottom: 5px;
}
.navbar > .container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.navbar > .container-fluid {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.navbar > .container-sm {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.navbar > .container-md {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.navbar > .container-lg {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.navbar > .container-xl {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.navbar-brand {
  padding-top: 5px;
  padding-bottom: 5px;
  margin-right: 16px;
  font-size: 1.25rem;
  text-decoration: none;
  white-space: nowrap;
}

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}
.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 8px;
  padding-bottom: 8px;
}

.navbar-collapse {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
}

.navbar-toggler {
  padding: 4px 12px;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-transition: -webkit-box-shadow 0.15s ease-in-out;
  transition: -webkit-box-shadow 0.15s ease-in-out;
  transition: box-shadow 0.15s ease-in-out;
  transition: box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  -webkit-box-shadow: 0 0 0 4px;
          box-shadow: 0 0 0 4px;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-expand {
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 8px;
  padding-left: 8px;
}
.navbar-expand .navbar-collapse {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:hover {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.55);
}
.navbar-light .navbar-nav .nav-link:hover {
  color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .show > .nav-link {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.55);
  border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.55);
}
.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-text a:hover {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #ffffff;
}
.navbar-dark .navbar-brand:hover {
  color: #ffffff;
}
.navbar-dark .navbar-brand:focus {
  color: #ffffff;
}
.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.55);
}
.navbar-dark .navbar-nav .nav-link:hover {
  color: rgba(255, 255, 255, 0.75);
}
.navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}
.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .show > .nav-link {
  color: #ffffff;
}
.navbar-dark .navbar-nav .nav-link.active {
  color: #ffffff;
}
.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.55);
  border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.55);
}
.navbar-dark .navbar-text a {
  color: #ffffff;
}
.navbar-dark .navbar-text a:hover {
  color: #ffffff;
}
.navbar-dark .navbar-text a:focus {
  color: #ffffff;
}

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #ffffff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 4px;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.card > .list-group + .card-footer {
  border-top: 0;
}
.card > .card-header + .list-group {
  border-top: 0;
}

.card-body {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  padding: 10px 10px;
}

.card-title {
  margin-bottom: 5px;
}

.card-subtitle {
  margin-top: -2.5px;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}
.card-link + .card-link {
  margin-left: 10px;
}

.card-header {
  padding: 5px 10px;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
  border-radius: 3px 3px 0 0;
}

.card-footer {
  padding: 5px 10px;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
  border-radius: 0 0 3px 3px;
}

.card-header-tabs {
  margin-right: -5px;
  margin-bottom: -5px;
  margin-left: -5px;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -5px;
  margin-left: -5px;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 10px;
  border-radius: 3px;
}

.card-img {
  width: 100%;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}

.card-img-top {
  width: 100%;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}

.card-group > .card {
  margin-bottom: 15px;
}

.accordion {
  overflow: unset;
}
.accordion > .card {
  overflow: hidden;
}
.accordion > .card:not(:last-of-type) {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.accordion > .card:not(:first-of-type) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.accordion > .card > .card-header {
  border-radius: 0;
  margin-bottom: -1px;
}

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  color: #555;
  text-decoration: none;
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  padding: 6px 12px;
}
.page-link:hover {
  z-index: 2;
  color: #b74f00;
  background-color: #E9ECEF;
  border-color: #eeeeee;
}
.page-link:focus {
  z-index: 3;
  color: #b74f00;
  background-color: #E9ECEF;
  outline: 0;
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
}

.page-item:not(:first-child) .page-link {
  margin-left: -1px;
}
.page-item:first-child .page-link {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.page-item:last-child .page-link {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}

.page-item.active .page-link {
  z-index: 3;
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}

.page-item.disabled .page-link {
  color: #6C757D;
  pointer-events: none;
  background-color: #ffffff;
  border-color: #eeeeee;
}

.pagination-lg .page-link {
  padding: 12px 24px;
  font-size: 1.25rem;
}
.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 4.8px;
  border-bottom-left-radius: 4.8px;
}
.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 4.8px;
  border-bottom-right-radius: 4.8px;
}

.pagination-sm .page-link {
  padding: 4px 8px;
  font-size: 0.875rem;
}
.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 3.2px;
  border-bottom-left-radius: 3.2px;
}
.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 3.2px;
  border-bottom-right-radius: 3.2px;
}

.badge {
  display: inline-block;
  padding: 5.6px 10.4px;
  font-size: 0.75rem;
  font-weight: 700;
  line-height: 1;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 4px;
}
.badge:empty {
  display: none;
}

.alert {
  position: relative;
  padding: 10px 10px;
  margin-bottom: 16px;
  border: 1px solid transparent;
  border-radius: 4px;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 30px;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 12.5px 10px;
}

.alert-primary {
  color: #853a02;
  background-color: #ffe2cd;
  border-color: #ffd7b9;
}
.alert-primary .alert-link {
  color: #532401;
}

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}
.alert-secondary .alert-link {
  color: #202326;
}

.alert-success {
  color: #0d462c;
  background-color: #d1e7dd;
  border-color: #bfddcf;
}
.alert-success .alert-link {
  color: #051b11;
}

.alert-info {
  color: #07697d;
  background-color: #cff4fc;
  border-color: #bbf0fb;
}
.alert-info .alert-link {
  color: #04404d;
}

.alert-warning {
  color: #856404;
  background-color: #ffffff;
  border-color: #ffeeba;
}
.alert-warning .alert-link {
  color: #533f03;
}

.alert-danger {
  color: #030303;
  background-color: #cdcdcd;
  border-color: #b9b9b9;
}
.alert-danger .alert-link {
  color: black;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}
.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}
.alert-dark .alert-link {
  color: #040505;
}

.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 16px;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #E9ECEF;
  border-radius: 4px;
}

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  overflow: hidden;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  background-color: #555;
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease;
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 16px 16px;
}

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
          animation: progress-bar-stripes 1s linear infinite;
}

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 4px;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}
.list-group-item-action:hover {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #F8F9FA;
}
.list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #F8F9FA;
}
.list-group-item-action:active {
  color: #444444;
  background-color: #E9ECEF;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  background-color: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item:disabled {
  color: #6C757D;
  pointer-events: none;
  background-color: #ffffff;
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-item.disabled {
  color: #6C757D;
  pointer-events: none;
  background-color: #ffffff;
}

.list-group-item.active {
  z-index: 2;
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 4px;
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 4px;
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}

.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #853a02;
  background-color: #ffd7b9;
}

.list-group-item-primary.list-group-item-action:hover {
  color: #853a02;
  background-color: #ffc8a0;
}
.list-group-item-primary.list-group-item-action:focus {
  color: #853a02;
  background-color: #ffc8a0;
}

.list-group-item-primary.list-group-item-action.active {
  color: #ffffff;
  background-color: #853a02;
  border-color: #853a02;
}

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover {
  color: #383d41;
  background-color: #c8cbcf;
}
.list-group-item-secondary.list-group-item-action:focus {
  color: #383d41;
  background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #ffffff;
  background-color: #383d41;
  border-color: #383d41;
}

.list-group-item-success {
  color: #0d462c;
  background-color: #bfddcf;
}

.list-group-item-success.list-group-item-action:hover {
  color: #0d462c;
  background-color: #aed4c3;
}
.list-group-item-success.list-group-item-action:focus {
  color: #0d462c;
  background-color: #aed4c3;
}

.list-group-item-success.list-group-item-action.active {
  color: #ffffff;
  background-color: #0d462c;
  border-color: #0d462c;
}

.list-group-item-info {
  color: #07697d;
  background-color: #bbf0fb;
}

.list-group-item-info.list-group-item-action:hover {
  color: #07697d;
  background-color: #a3ebfa;
}
.list-group-item-info.list-group-item-action:focus {
  color: #07697d;
  background-color: #a3ebfa;
}

.list-group-item-info.list-group-item-action.active {
  color: #ffffff;
  background-color: #07697d;
  border-color: #07697d;
}

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba;
}

.list-group-item-warning.list-group-item-action:hover {
  color: #856404;
  background-color: #ffe8a1;
}
.list-group-item-warning.list-group-item-action:focus {
  color: #856404;
  background-color: #ffe8a1;
}

.list-group-item-warning.list-group-item-action.active {
  color: #ffffff;
  background-color: #856404;
  border-color: #856404;
}

.list-group-item-danger {
  color: #030303;
  background-color: #b9b9b9;
}

.list-group-item-danger.list-group-item-action:hover {
  color: #030303;
  background-color: #acacac;
}
.list-group-item-danger.list-group-item-action:focus {
  color: #030303;
  background-color: #acacac;
}

.list-group-item-danger.list-group-item-action.active {
  color: #ffffff;
  background-color: #030303;
  border-color: #030303;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover {
  color: #818182;
  background-color: #ececf6;
}
.list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #ffffff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover {
  color: #1b1e21;
  background-color: #b9bbbe;
}
.list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
  color: #ffffff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}

.btn-close {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  width: 16px;
  height: 16px;
  padding: 4px 4px;
  color: #000000;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 16 16'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") no-repeat center center/16px auto;
  background-clip: content-box;
  border: 0;
  border-radius: 4px;
  opacity: 0.5;
}
.btn-close:hover {
  color: #000000;
  text-decoration: none;
  opacity: 0.75;
}
.btn-close:focus {
  outline: none;
  -webkit-box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
          box-shadow: 0 0 0 4px rgba(255, 112, 4, 0.25);
  opacity: 1;
}
.btn-close:disabled {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
   -ms-user-select: none;
       user-select: none;
  opacity: 0.25;
}

.btn-close.disabled {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
   -ms-user-select: none;
       user-select: none;
  opacity: 0.25;
}

.btn-close-white {
  -webkit-filter: invert(1) grayscale(100%) brightness(200%);
          filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
  max-width: 350px;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
  opacity: 0;
  border-radius: 4px;
}
.toast:not(:last-child) {
  margin-bottom: 12px;
}

.toast.showing {
  opacity: 1;
}

.toast.show {
  display: block;
  opacity: 1;
}

.toast.hide {
  display: none;
}

.toast-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 8px 12px;
  color: #6C757D;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.toast-header .btn-close {
  margin-right: -6px;
  margin-left: 12px;
}

.toast-body {
  padding: 12px;
}

.modal-open {
  overflow: hidden;
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 8px;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform 0.3s ease-out;
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -50px);
          transform: translate(0, -50px);
}

.modal.show .modal-dialog {
  -webkit-transform: none;
          transform: none;
}

.modal.modal-static .modal-dialog {
  -webkit-transform: scale(1.02);
          transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - 16px);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: calc(100% - 16px);
}

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 4.8px;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.7;
}

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 10px 10px;
  border-bottom: 1px solid #eeeeee;
}
.modal-header .btn-close {
  padding: 5px 5px;
  margin: -5px -5px -5px auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  padding: 20px;
}

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  padding: 6px;
  border-top: 1px solid #eeeeee;
  border-bottom-right-radius: 3.8px;
  border-bottom-left-radius: 3.8px;
}
.modal-footer > * {
  margin: 4px;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}
.modal-fullscreen .modal-footer {
  border-radius: 0;
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Poppins, sans-serif";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}
.tooltip .tooltip-arrow {
  position: absolute;
  display: block;
  width: 12.8px;
  height: 6.4px;
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.tooltip.show {
  opacity: 0.9;
}

.bs-tooltip-top {
  padding: 6.4px 0;
}
.bs-tooltip-top .tooltip-arrow {
  bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before {
  top: 0;
  border-width: 6.4px 6.4px 0;
  border-top-color: #000000;
}

.bs-tooltip-auto[x-placement^=top] {
  padding: 6.4px 0;
}
.bs-tooltip-auto[x-placement^=top] .tooltip-arrow {
  bottom: 0;
}
.bs-tooltip-auto[x-placement^=top] .tooltip-arrow::before {
  top: 0;
  border-width: 6.4px 6.4px 0;
  border-top-color: #000000;
}

.bs-tooltip-right {
  padding: 0 6.4px;
}
.bs-tooltip-right .tooltip-arrow {
  left: 0;
  width: 6.4px;
  height: 12.8px;
}
.bs-tooltip-right .tooltip-arrow::before {
  right: 0;
  border-width: 6.4px 6.4px 6.4px 0;
  border-right-color: #000000;
}

.bs-tooltip-auto[x-placement^=right] {
  padding: 0 6.4px;
}
.bs-tooltip-auto[x-placement^=right] .tooltip-arrow {
  left: 0;
  width: 6.4px;
  height: 12.8px;
}
.bs-tooltip-auto[x-placement^=right] .tooltip-arrow::before {
  right: 0;
  border-width: 6.4px 6.4px 6.4px 0;
  border-right-color: #000000;
}

.bs-tooltip-bottom {
  padding: 6.4px 0;
}
.bs-tooltip-bottom .tooltip-arrow {
  top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before {
  bottom: 0;
  border-width: 0 6.4px 6.4px;
  border-bottom-color: #000000;
}

.bs-tooltip-auto[x-placement^=bottom] {
  padding: 6.4px 0;
}
.bs-tooltip-auto[x-placement^=bottom] .tooltip-arrow {
  top: 0;
}
.bs-tooltip-auto[x-placement^=bottom] .tooltip-arrow::before {
  bottom: 0;
  border-width: 0 6.4px 6.4px;
  border-bottom-color: #000000;
}

.bs-tooltip-left {
  padding: 0 6.4px;
}
.bs-tooltip-left .tooltip-arrow {
  right: 0;
  width: 6.4px;
  height: 12.8px;
}
.bs-tooltip-left .tooltip-arrow::before {
  left: 0;
  border-width: 6.4px 0 6.4px 6.4px;
  border-left-color: #000000;
}

.bs-tooltip-auto[x-placement^=left] {
  padding: 0 6.4px;
}
.bs-tooltip-auto[x-placement^=left] .tooltip-arrow {
  right: 0;
  width: 6.4px;
  height: 12.8px;
}
.bs-tooltip-auto[x-placement^=left] .tooltip-arrow::before {
  left: 0;
  border-width: 6.4px 0 6.4px 6.4px;
  border-left-color: #000000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 2.5px 5px;
  color: #ffffff;
  text-align: center;
  background-color: #000000;
  border-radius: 4px;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Poppins, sans-serif";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 4.8px;
}
.popover .popover-arrow {
  position: absolute;
  display: block;
  width: 16px;
  height: 8px;
  margin: 0 4.8px;
}
.popover .popover-arrow::before {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top {
  margin-bottom: 8px;
}
.bs-popover-top > .popover-arrow {
  bottom: -9px;
}
.bs-popover-top > .popover-arrow::before {
  bottom: 0;
  border-width: 8px 8px 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top > .popover-arrow::after {
  bottom: 1px;
  border-width: 8px 8px 0;
  border-top-color: #ffffff;
}

.bs-popover-auto[x-placement^=top] {
  margin-bottom: 8px;
}
.bs-popover-auto[x-placement^=top] > .popover-arrow {
  bottom: -9px;
}
.bs-popover-auto[x-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-width: 8px 8px 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-auto[x-placement^=top] > .popover-arrow::after {
  bottom: 1px;
  border-width: 8px 8px 0;
  border-top-color: #ffffff;
}

.bs-popover-right {
  margin-left: 8px;
}
.bs-popover-right > .popover-arrow {
  left: -9px;
  width: 8px;
  height: 16px;
  margin: 4.8px 0;
}
.bs-popover-right > .popover-arrow::before {
  left: 0;
  border-width: 8px 8px 8px 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-right > .popover-arrow::after {
  left: 1px;
  border-width: 8px 8px 8px 0;
  border-right-color: #ffffff;
}

.bs-popover-auto[x-placement^=right] {
  margin-left: 8px;
}
.bs-popover-auto[x-placement^=right] > .popover-arrow {
  left: -9px;
  width: 8px;
  height: 16px;
  margin: 4.8px 0;
}
.bs-popover-auto[x-placement^=right] > .popover-arrow::before {
  left: 0;
  border-width: 8px 8px 8px 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-auto[x-placement^=right] > .popover-arrow::after {
  left: 1px;
  border-width: 8px 8px 8px 0;
  border-right-color: #ffffff;
}

.bs-popover-bottom {
  margin-top: 8px;
}
.bs-popover-bottom > .popover-arrow {
  top: -9px;
}
.bs-popover-bottom > .popover-arrow::before {
  top: 0;
  border-width: 0 8px 8px 8px;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom > .popover-arrow::after {
  top: 1px;
  border-width: 0 8px 8px 8px;
  border-bottom-color: #ffffff;
}
.bs-popover-bottom .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 16px;
  margin-left: -8px;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-auto[x-placement^=bottom] {
  margin-top: 8px;
}
.bs-popover-auto[x-placement^=bottom] > .popover-arrow {
  top: -9px;
}
.bs-popover-auto[x-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-width: 0 8px 8px 8px;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-auto[x-placement^=bottom] > .popover-arrow::after {
  top: 1px;
  border-width: 0 8px 8px 8px;
  border-bottom-color: #ffffff;
}
.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 16px;
  margin-left: -8px;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left {
  margin-right: 8px;
}
.bs-popover-left > .popover-arrow {
  right: -9px;
  width: 8px;
  height: 16px;
  margin: 4.8px 0;
}
.bs-popover-left > .popover-arrow::before {
  right: 0;
  border-width: 8px 0 8px 8px;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-left > .popover-arrow::after {
  right: 1px;
  border-width: 8px 0 8px 8px;
  border-left-color: #ffffff;
}

.bs-popover-auto[x-placement^=left] {
  margin-right: 8px;
}
.bs-popover-auto[x-placement^=left] > .popover-arrow {
  right: -9px;
  width: 8px;
  height: 16px;
  margin: 4.8px 0;
}
.bs-popover-auto[x-placement^=left] > .popover-arrow::before {
  right: 0;
  border-width: 8px 0 8px 8px;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-auto[x-placement^=left] > .popover-arrow::after {
  right: 1px;
  border-width: 8px 0 8px 8px;
  border-left-color: #ffffff;
}

.popover-header {
  padding: 8px 10px;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: 3.8px;
  border-top-right-radius: 3.8px;
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 10px 10px;
  color: #444444;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
      touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.6s ease-in-out;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
}

.carousel-item.active {
  display: block;
}

.carousel-item-next {
  display: block;
}
.carousel-item-next:not(.carousel-item-left) {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}

.carousel-item-prev {
  display: block;
}
.carousel-item-prev:not(.carousel-item-right) {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}

.active.carousel-item-right {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}

.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
          transform: none;
}
.carousel-fade .carousel-item.active {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .carousel-item-next.carousel-item-left {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-left {
  z-index: 0;
  opacity: 0;
  -webkit-transition: opacity 0s 0.6s;
  transition: opacity 0s 0.6s;
}
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  -webkit-transition: opacity 0s 0.6s;
  transition: opacity 0s 0.6s;
}

.carousel-control-prev {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 15%;
  color: #ffffff;
  text-align: center;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease;
  left: 0;
}
.carousel-control-prev:hover {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}
.carousel-control-prev:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 15%;
  color: #ffffff;
  text-align: center;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease;
  right: 0;
}
.carousel-control-next:hover {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}
.carousel-control-next:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev-icon {
  display: inline-block;
  width: 32px;
  height: 32px;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 16 16'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  display: inline-block;
  width: 32px;
  height: 32px;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23FFF' viewBox='0 0 16 16'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators li {
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-box-flex: 0;
      -ms-flex: 0 1 auto;
          flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #ffffff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  -webkit-transition: opacity 0.6s ease;
  transition: opacity 0.6s ease;
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #ffffff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon {
  -webkit-filter: invert(1) grayscale(100);
          filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-control-next-icon {
  -webkit-filter: invert(1) grayscale(100);
          filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators li {
  background-color: #000000;
}
.carousel-dark .carousel-caption {
  color: #000000;
}

.spinner-border {
  display: inline-block;
  width: 32px;
  height: 32px;
  vertical-align: text-bottom;
  border: 4px solid #ffffff;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: spinner-border 0.75s linear infinite;
          animation: spinner-border 0.75s linear infinite;
}

.spinner-border-sm {
  width: 16px;
  height: 16px;
  border-width: 3.2px;
}

.spinner-grow {
  display: inline-block;
  width: 32px;
  height: 32px;
  vertical-align: text-bottom;
  background-color: #ffffff;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: spinner-grow 0.75s linear infinite;
          animation: spinner-grow 0.75s linear infinite;
}

.spinner-grow-sm {
  width: 16px;
  height: 16px;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.link-primary {
  color: #555;
}
.link-primary:hover {
  color: #ff9c51;
}
.link-primary:focus {
  color: #ff9c51;
}

.link-secondary {
  color: #6C757D;
}
.link-secondary:hover {
  color: #494f54;
}
.link-secondary:focus {
  color: #494f54;
}

.link-success {
  color: #198754;
}
.link-success:hover {
  color: #0d462c;
}
.link-success:focus {
  color: #0d462c;
}

.link-info {
  color: #0DCAF0;
}
.link-info:hover {
  color: #54dbf6;
}
.link-info:focus {
  color: #54dbf6;
}

.link-warning {
  color: #FFC107;
}
.link-warning:hover {
  color: #ffd454;
}
.link-warning:focus {
  color: #ffd454;
}

.link-danger {
  color: #050505;
}
.link-danger:hover {
  color: black;
}
.link-danger:focus {
  color: black;
}

.link-light {
  color: #F8F9FA;
}
.link-light:hover {
  color: white;
}
.link-light:focus {
  color: white;
}

.link-dark {
  color: #343A40;
}
.link-dark:hover {
  color: #121416;
}
.link-dark:focus {
  color: #121416;
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --aspect-ratio: 100%;
}

.ratio-4x3 {
  --aspect-ratio: calc(3 / 4 * 100%);
}

.ratio-16x9 {
  --aspect-ratio: calc(9 / 16 * 100%);
}

.ratio-21x9 {
  --aspect-ratio: calc(9 / 21 * 100%);
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.visually-hidden-focusable:not(:focus) {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.align-baseline {
  vertical-align: baseline;
}

.align-top {
  vertical-align: top;
}

.align-middle {
  vertical-align: middle;
}

.align-bottom {
  vertical-align: bottom;
}

.align-text-bottom {
  vertical-align: text-bottom;
}

.align-text-top {
  vertical-align: text-top;
}

.float-left {
  float: left;
}

.float-right {
  float: right;
}

.float-none {
  float: none;
}

.overflow-auto {
  overflow: auto;
}

.overflow-hidden {
  overflow: hidden;
}

.d-inline {
  display: inline;
}

.d-inline-block {
  display: inline-block;
}

.d-block {
  display: block;
}

.d-table {
  display: table;
}

.d-table-row {
  display: table-row;
}

.d-table-cell {
  display: table-cell;
}

.d-flex {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.d-inline-flex {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
}

.d-none {
  display: none;
}

.shadow {
  -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.shadow-sm {
  -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.075);
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.075);
}

.shadow-lg {
  -webkit-box-shadow: 0 16px 48px rgba(0, 0, 0, 0.175);
          box-shadow: 0 16px 48px rgba(0, 0, 0, 0.175);
}

.shadow-none {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.position-static {
  position: static;
}

.position-relative {
  position: relative;
}

.position-absolute {
  position: absolute;
}

.position-fixed {
  position: fixed;
}

.position-sticky {
  position: sticky;
}

.top-0 {
  top: 0;
}

.top-50 {
  top: 50%;
}

.top-100 {
  top: 100%;
}

.bottom-0 {
  bottom: 0;
}

.bottom-50 {
  bottom: 50%;
}

.bottom-100 {
  bottom: 100%;
}

.left-0 {
  left: 0;
}

.left-50 {
  left: 50%;
}

.left-100 {
  left: 100%;
}

.right-0 {
  right: 0;
}

.right-50 {
  right: 50%;
}

.right-100 {
  right: 100%;
}

.translate-middle {
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
}

.border {
  border: 1px solid #eeeeee;
}

.border-0 {
  border: 0;
  border-width: 0;
}

.border-top {
  border-top: 1px solid #eeeeee;
}

.border-top-0 {
  border-top: 0;
}

.border-right {
  border-right: 1px solid #eeeeee;
}

.border-right-0 {
  border-right: 0;
}

.border-bottom {
  border-bottom: 1px solid #eeeeee;
}

.border-bottom-0 {
  border-bottom: 0;
}

.border-left {
  border-left: 1px solid #eeeeee;
}

.border-left-0 {
  border-left: 0;
}

.border-primary {
  border-color: #555;
}

.border-secondary {
  border-color: #6C757D;
}

.border-success {
  border-color: #198754;
}

.border-info {
  border-color: #0DCAF0;
}

.border-warning {
  border-color: #FFC107;
}

.border-danger {
  border-color: #050505;
}

.border-light {
  border-color: #F8F9FA;
}

.border-dark {
  border-color: #343A40;
}

.border-white {
  border-color: #ffffff;
}

.border-1 {
  border-width: 1px;
}

.border-2 {
  border-width: 2px;
}

.border-3 {
  border-width: 3px;
}

.border-4 {
  border-width: 4px;
}

.border-5 {
  border-width: 5px;
}

.w-25 {
  width: 25%;
}

.w-50 {
  width: 50%;
}

.w-75 {
  width: 75%;
}

.w-100 {
  width: 100%;
}

.w-auto {
  width: auto;
}

.mw-100 {
  max-width: 100%;
}

.vw-100 {
  width: 100vw;
}

.min-vw-100 {
  min-width: 100vw;
}

.h-25 {
  height: 25%;
}

.h-50 {
  height: 50%;
}

.h-75 {
  height: 75%;
}

.h-100 {
  height: 100%;
}

.h-auto {
  height: auto;
}

.mh-100 {
  max-height: 100%;
}

.vh-100 {
  height: 100vh;
}

.min-vh-100 {
  min-height: 100vh;
}

.flex-fill {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
}

.flex-row {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}

.flex-column {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.flex-row-reverse {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
          flex-direction: row-reverse;
}

.flex-column-reverse {
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
      -ms-flex-direction: column-reverse;
          flex-direction: column-reverse;
}

.flex-grow-0 {
  -webkit-box-flex: 0;
      -ms-flex-positive: 0;
          flex-grow: 0;
}

.flex-grow-1 {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}

.flex-shrink-0 {
  -ms-flex-negative: 0;
      flex-shrink: 0;
}

.flex-shrink-1 {
  -ms-flex-negative: 1;
      flex-shrink: 1;
}

.flex-wrap {
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse;
      flex-wrap: wrap-reverse;
}

.justify-content-start {
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
}

.justify-content-end {
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

.justify-content-center {
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.justify-content-between {
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.justify-content-around {
  -ms-flex-pack: distribute;
      justify-content: space-around;
}

.justify-content-evenly {
  -webkit-box-pack: space-evenly;
      -ms-flex-pack: space-evenly;
          justify-content: space-evenly;
}

.align-items-start {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.align-items-end {
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
}

.align-items-center {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.align-items-baseline {
  -webkit-box-align: baseline;
      -ms-flex-align: baseline;
          align-items: baseline;
}

.align-items-stretch {
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
}

.align-content-start {
  -ms-flex-line-pack: start;
      align-content: flex-start;
}

.align-content-end {
  -ms-flex-line-pack: end;
      align-content: flex-end;
}

.align-content-center {
  -ms-flex-line-pack: center;
      align-content: center;
}

.align-content-between {
  -ms-flex-line-pack: justify;
      align-content: space-between;
}

.align-content-around {
  -ms-flex-line-pack: distribute;
      align-content: space-around;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch;
      align-content: stretch;
}

.align-self-auto {
  -ms-flex-item-align: auto;
      -ms-grid-row-align: auto;
      align-self: auto;
}

.align-self-start {
  -ms-flex-item-align: start;
      align-self: flex-start;
}

.align-self-end {
  -ms-flex-item-align: end;
      align-self: flex-end;
}

.align-self-center {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
}

.align-self-baseline {
  -ms-flex-item-align: baseline;
      align-self: baseline;
}

.align-self-stretch {
  -ms-flex-item-align: stretch;
      -ms-grid-row-align: stretch;
      align-self: stretch;
}

.order-first {
  -webkit-box-ordinal-group: 0;
      -ms-flex-order: -1;
          order: -1;
}

.order-0 {
  -webkit-box-ordinal-group: 1;
      -ms-flex-order: 0;
          order: 0;
}

.order-1 {
  -webkit-box-ordinal-group: 2;
      -ms-flex-order: 1;
          order: 1;
}

.order-2 {
  -webkit-box-ordinal-group: 3;
      -ms-flex-order: 2;
          order: 2;
}

.order-3 {
  -webkit-box-ordinal-group: 4;
      -ms-flex-order: 3;
          order: 3;
}

.order-4 {
  -webkit-box-ordinal-group: 5;
      -ms-flex-order: 4;
          order: 4;
}

.order-5 {
  -webkit-box-ordinal-group: 6;
      -ms-flex-order: 5;
          order: 5;
}

.order-last {
  -webkit-box-ordinal-group: 7;
      -ms-flex-order: 6;
          order: 6;
}

.m-0 {
  margin: 0;
}

.m-1 {
  margin: 5px;
}

.m-2 {
  margin: 10px;
}

.m-3 {
  margin: 15px;
}

.m-4 {
  margin: 20px;
}

.m-5 {
  margin: 25px;
}

.m-6 {
  margin: 30px;
}

.m-7 {
  margin: 35px;
}

.m-8 {
  margin: 40px;
}

.m-9 {
  margin: 45px;
}

.m-10 {
  margin: 50px;
}

.m-auto {
  margin: auto;
}

.mx-0 {
  margin-right: 0;
  margin-left: 0;
}

.mx-1 {
  margin-right: 5px;
  margin-left: 5px;
}

.mx-2 {
  margin-right: 10px;
  margin-left: 10px;
}

.mx-3 {
  margin-right: 15px;
  margin-left: 15px;
}

.mx-4 {
  margin-right: 20px;
  margin-left: 20px;
}

.mx-5 {
  margin-right: 25px;
  margin-left: 25px;
}

.mx-6 {
  margin-right: 30px;
  margin-left: 30px;
}

.mx-7 {
  margin-right: 35px;
  margin-left: 35px;
}

.mx-8 {
  margin-right: 40px;
  margin-left: 40px;
}

.mx-9 {
  margin-right: 45px;
  margin-left: 45px;
}

.mx-10 {
  margin-right: 50px;
  margin-left: 50px;
}

.mx-auto {
  margin-right: auto;
  margin-left: auto;
}

.my-0 {
  margin-top: 0;
  margin-bottom: 0;
}

.my-1 {
  margin-top: 5px;
  margin-bottom: 5px;
}

.my-2 {
  margin-top: 10px;
  margin-bottom: 10px;
}

.my-3 {
  margin-top: 15px;
  margin-bottom: 15px;
}

.my-4 {
  margin-top: 20px;
  margin-bottom: 20px;
}

.my-5 {
  margin-top: 25px;
  margin-bottom: 25px;
}

.my-6 {
  margin-top: 30px;
  margin-bottom: 30px;
}

.my-7 {
  margin-top: 35px;
  margin-bottom: 35px;
}

.my-8 {
  margin-top: 40px;
  margin-bottom: 40px;
}

.my-9 {
  margin-top: 45px;
  margin-bottom: 45px;
}

.my-10 {
  margin-top: 50px;
  margin-bottom: 50px;
}

.my-auto {
  margin-top: auto;
  margin-bottom: auto;
}

.mt-0 {
  margin-top: 0;
}

.mt-1 {
  margin-top: 5px;
}

.mt-2 {
  margin-top: 10px;
}

.mt-3 {
  margin-top: 15px;
}

.mt-4 {
  margin-top: 20px;
}

.mt-5 {
  margin-top: 25px;
}

.mt-6 {
  margin-top: 30px;
}

.mt-7 {
  margin-top: 35px;
}

.mt-8 {
  margin-top: 40px;
}

.mt-9 {
  margin-top: 45px;
}

.mt-10 {
  margin-top: 50px;
}

.mt-auto {
  margin-top: auto;
}

.mr-0 {
  margin-right: 0;
}

.mr-1 {
  margin-right: 5px;
}

.mr-2 {
  margin-right: 10px;
}

.mr-3 {
  margin-right: 15px;
}

.mr-4 {
  margin-right: 20px;
}

.mr-5 {
  margin-right: 25px;
}

.mr-6 {
  margin-right: 30px;
}

.mr-7 {
  margin-right: 35px;
}

.mr-8 {
  margin-right: 40px;
}

.mr-9 {
  margin-right: 45px;
}

.mr-10 {
  margin-right: 50px;
}

.mr-auto {
  margin-right: auto;
}

.mb-0 {
  margin-bottom: 0;
}

.mb-1 {
  margin-bottom: 5px;
}

.mb-2 {
  margin-bottom: 10px;
}

.mb-3 {
  margin-bottom: 15px;
}

.mb-4 {
  margin-bottom: 20px;
}

.mb-5 {
  margin-bottom: 25px;
}

.mb-6 {
  margin-bottom: 30px;
}

.mb-7 {
  margin-bottom: 35px;
}

.mb-8 {
  margin-bottom: 40px;
}

.mb-9 {
  margin-bottom: 45px;
}

.mb-10 {
  margin-bottom: 50px;
}

.mb-auto {
  margin-bottom: auto;
}

.ml-0 {
  margin-left: 0;
}

.ml-1 {
  margin-left: 5px;
}

.ml-2 {
  margin-left: 10px;
}

.ml-3 {
  margin-left: 15px;
}

.ml-4 {
  margin-left: 20px;
}

.ml-5 {
  margin-left: 25px;
}

.ml-6 {
  margin-left: 30px;
}

.ml-7 {
  margin-left: 35px;
}

.ml-8 {
  margin-left: 40px;
}

.ml-9 {
  margin-left: 45px;
}

.ml-10 {
  margin-left: 50px;
}

.ml-auto {
  margin-left: auto;
}

.m-n1 {
  margin: -5px;
}

.m-n2 {
  margin: -10px;
}

.m-n3 {
  margin: -15px;
}

.m-n4 {
  margin: -20px;
}

.m-n5 {
  margin: -25px;
}

.m-n6 {
  margin: -30px;
}

.m-n7 {
  margin: -35px;
}

.m-n8 {
  margin: -40px;
}

.m-n9 {
  margin: -45px;
}

.m-n10 {
  margin: -50px;
}

.mx-n1 {
  margin-right: -5px;
  margin-left: -5px;
}

.mx-n2 {
  margin-right: -10px;
  margin-left: -10px;
}

.mx-n3 {
  margin-right: -15px;
  margin-left: -15px;
}

.mx-n4 {
  margin-right: -20px;
  margin-left: -20px;
}

.mx-n5 {
  margin-right: -25px;
  margin-left: -25px;
}

.mx-n6 {
  margin-right: -30px;
  margin-left: -30px;
}

.mx-n7 {
  margin-right: -35px;
  margin-left: -35px;
}

.mx-n8 {
  margin-right: -40px;
  margin-left: -40px;
}

.mx-n9 {
  margin-right: -45px;
  margin-left: -45px;
}

.mx-n10 {
  margin-right: -50px;
  margin-left: -50px;
}

.my-n1 {
  margin-top: -5px;
  margin-bottom: -5px;
}

.my-n2 {
  margin-top: -10px;
  margin-bottom: -10px;
}

.my-n3 {
  margin-top: -15px;
  margin-bottom: -15px;
}

.my-n4 {
  margin-top: -20px;
  margin-bottom: -20px;
}

.my-n5 {
  margin-top: -25px;
  margin-bottom: -25px;
}

.my-n6 {
  margin-top: -30px;
  margin-bottom: -30px;
}

.my-n7 {
  margin-top: -35px;
  margin-bottom: -35px;
}

.my-n8 {
  margin-top: -40px;
  margin-bottom: -40px;
}

.my-n9 {
  margin-top: -45px;
  margin-bottom: -45px;
}

.my-n10 {
  margin-top: -50px;
  margin-bottom: -50px;
}

.mt-n1 {
  margin-top: -5px;
}

.mt-n2 {
  margin-top: -10px;
}

.mt-n3 {
  margin-top: -15px;
}

.mt-n4 {
  margin-top: -20px;
}

.mt-n5 {
  margin-top: -25px;
}

.mt-n6 {
  margin-top: -30px;
}

.mt-n7 {
  margin-top: -35px;
}

.mt-n8 {
  margin-top: -40px;
}

.mt-n9 {
  margin-top: -45px;
}

.mt-n10 {
  margin-top: -50px;
}

.mr-n1 {
  margin-right: -5px;
}

.mr-n2 {
  margin-right: -10px;
}

.mr-n3 {
  margin-right: -15px;
}

.mr-n4 {
  margin-right: -20px;
}

.mr-n5 {
  margin-right: -25px;
}

.mr-n6 {
  margin-right: -30px;
}

.mr-n7 {
  margin-right: -35px;
}

.mr-n8 {
  margin-right: -40px;
}

.mr-n9 {
  margin-right: -45px;
}

.mr-n10 {
  margin-right: -50px;
}

.mb-n1 {
  margin-bottom: -5px;
}

.mb-n2 {
  margin-bottom: -10px;
}

.mb-n3 {
  margin-bottom: -15px;
}

.mb-n4 {
  margin-bottom: -20px;
}

.mb-n5 {
  margin-bottom: -25px;
}

.mb-n6 {
  margin-bottom: -30px;
}

.mb-n7 {
  margin-bottom: -35px;
}

.mb-n8 {
  margin-bottom: -40px;
}

.mb-n9 {
  margin-bottom: -45px;
}

.mb-n10 {
  margin-bottom: -50px;
}

.ml-n1 {
  margin-left: -5px;
}

.ml-n2 {
  margin-left: -10px;
}

.ml-n3 {
  margin-left: -15px;
}

.ml-n4 {
  margin-left: -20px;
}

.ml-n5 {
  margin-left: -25px;
}

.ml-n6 {
  margin-left: -30px;
}

.ml-n7 {
  margin-left: -35px;
}

.ml-n8 {
  margin-left: -40px;
}

.ml-n9 {
  margin-left: -45px;
}

.ml-n10 {
  margin-left: -50px;
}

.p-0 {
  padding: 0;
}

.p-1 {
  padding: 5px;
}

.p-2 {
  padding: 10px;
}

.p-3 {
  padding: 15px;
}

.p-4 {
  padding: 20px;
}

.p-5 {
  padding: 25px;
}

.p-6 {
  padding: 30px;
}

.p-7 {
  padding: 35px;
}

.p-8 {
  padding: 40px;
}

.p-9 {
  padding: 45px;
}

.p-10 {
  padding: 50px;
}

.px-0 {
  padding-right: 0;
  padding-left: 0;
}

.px-1 {
  padding-right: 5px;
  padding-left: 5px;
}

.px-2 {
  padding-right: 10px;
  padding-left: 10px;
}

.px-3 {
  padding-right: 15px;
  padding-left: 15px;
}

.px-4 {
  padding-right: 20px;
  padding-left: 20px;
}

.px-5 {
  padding-right: 25px;
  padding-left: 25px;
}

.px-6 {
  padding-right: 30px;
  padding-left: 30px;
}

.px-7 {
  padding-right: 35px;
  padding-left: 35px;
}

.px-8 {
  padding-right: 40px;
  padding-left: 40px;
}

.px-9 {
  padding-right: 45px;
  padding-left: 45px;
}

.px-10 {
  padding-right: 50px;
  padding-left: 50px;
}

.py-0 {
  padding-top: 0;
  padding-bottom: 0;
}

.py-1 {
  padding-top: 5px;
  padding-bottom: 5px;
}

.py-2 {
  padding-top: 10px;
  padding-bottom: 10px;
}

.py-3 {
  padding-top: 15px;
  padding-bottom: 15px;
}

.py-4 {
  padding-top: 20px;
  padding-bottom: 20px;
}

.py-5 {
  padding-top: 25px;
  padding-bottom: 25px;
}

.py-6 {
  padding-top: 30px;
  padding-bottom: 30px;
}

.py-7 {
  padding-top: 35px;
  padding-bottom: 35px;
}

.py-8 {
  padding-top: 40px;
  padding-bottom: 40px;
}

.py-9 {
  padding-top: 45px;
  padding-bottom: 45px;
}

.py-10 {
  padding-top: 50px;
  padding-bottom: 50px;
}

.pt-0 {
  padding-top: 0;
}

.pt-1 {
  padding-top: 5px;
}

.pt-2 {
  padding-top: 10px;
}

.pt-3 {
  padding-top: 15px;
}

.pt-4 {
  padding-top: 20px;
}

.pt-5 {
  padding-top: 25px;
}

.pt-6 {
  padding-top: 30px;
}

.pt-7 {
  padding-top: 35px;
}

.pt-8 {
  padding-top: 40px;
}

.pt-9 {
  padding-top: 45px;
}

.pt-10 {
  padding-top: 50px;
}

.pr-0 {
  padding-right: 0;
}

.pr-1 {
  padding-right: 5px;
}

.pr-2 {
  padding-right: 10px;
}

.pr-3 {
  padding-right: 15px;
}

.pr-4 {
  padding-right: 20px;
}

.pr-5 {
  padding-right: 25px;
}

.pr-6 {
  padding-right: 30px;
}

.pr-7 {
  padding-right: 35px;
}

.pr-8 {
  padding-right: 40px;
}

.pr-9 {
  padding-right: 45px;
}

.pr-10 {
  padding-right: 50px;
}

.pb-0 {
  padding-bottom: 0;
}

.pb-1 {
  padding-bottom: 5px;
}

.pb-2 {
  padding-bottom: 10px;
}

.pb-3 {
  padding-bottom: 15px;
}

.pb-4 {
  padding-bottom: 20px;
}

.pb-5 {
  padding-bottom: 25px;
}

.pb-6 {
  padding-bottom: 30px;
}

.pb-7 {
  padding-bottom: 35px;
}

.pb-8 {
  padding-bottom: 40px;
}

.pb-9 {
  padding-bottom: 45px;
}

.pb-10 {
  padding-bottom: 50px;
}

.pl-0 {
  padding-left: 0;
}

.pl-1 {
  padding-left: 5px;
}

.pl-2 {
  padding-left: 10px;
}

.pl-3 {
  padding-left: 15px;
}

.pl-4 {
  padding-left: 20px;
}

.pl-5 {
  padding-left: 25px;
}

.pl-6 {
  padding-left: 30px;
}

.pl-7 {
  padding-left: 35px;
}

.pl-8 {
  padding-left: 40px;
}

.pl-9 {
  padding-left: 45px;
}

.pl-10 {
  padding-left: 50px;
}

.font-weight-light {
  font-weight: 300;
}

.font-weight-lighter {
  font-weight: lighter;
}

.font-weight-normal {
  font-weight: 400;
}

.font-weight-bold {
  font-weight: 700;
}

.font-weight-bolder {
  font-weight: bolder;
}

.text-lowercase {
  text-transform: lowercase;
}

.text-uppercase {
  text-transform: uppercase;
}

.text-capitalize {
  text-transform: capitalize;
}

.text-left {
  text-align: left;
}

.text-right {
  text-align: right;
}

.text-center {
  text-align: center;
}

.text-primary {
  color: #555;
}

.text-secondary {
  color: #6C757D;
}

.text-success {
  color: #198754;
}

.text-info {
  color: #0DCAF0;
}

.text-warning {
  color: #FFC107;
}

.text-danger {
  color: #050505;
}

.text-light {
  color: #F8F9FA;
}

.text-dark {
  color: #343A40;
}

.text-white {
  color: #ffffff;
}

.text-body {
  color: #444444;
}

.text-muted {
  color: #6C757D;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5);
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5);
}

.text-reset {
  color: inherit;
}

.lh-1 {
  line-height: 1;
}

.lh-sm {
  line-height: 1.25;
}

.lh-base {
  line-height: 1.5;
}

.lh-lg {
  line-height: 2;
}

.bg-primary {
  background-color: #555;
}

.bg-secondary {
  background-color: #6C757D;
}

.bg-success {
  background-color: #198754;
}

.bg-info {
  background-color: #0DCAF0;
}

.bg-warning {
  background-color: #FFC107;
}

.bg-danger {
  background-color: #050505;
}

.bg-light {
  background-color: #F8F9FA;
}

.bg-dark {
  background-color: #343A40;
}

.bg-body {
  background-color: #ffffff;
}

.bg-white {
  background-color: #ffffff;
}

.bg-transparent {
  background-color: transparent;
}

.bg-gradient {
  background-image: var(--bs-gradient);
}

.text-wrap {
  white-space: normal;
}

.text-nowrap {
  white-space: nowrap;
}

.text-decoration-none {
  text-decoration: none;
}

.text-decoration-underline {
  text-decoration: underline;
}

.text-decoration-line-through {
  text-decoration: line-through;
}

.font-italic {
  font-style: italic;
}

.font-normal {
  font-style: normal;
}

.text-break {
  word-wrap: break-word;
  word-break: break-word;
}

.font-monospace {
  font-family: var(--bs-font-monospace);
}

.user-select-all {
  -webkit-user-select: all;
  -moz-user-select: all;
       user-select: all;
}

.user-select-auto {
  -webkit-user-select: auto;
  -moz-user-select: auto;
   -ms-user-select: auto;
       user-select: auto;
}

.user-select-none {
  -webkit-user-select: none;
  -moz-user-select: none;
   -ms-user-select: none;
       user-select: none;
}

.pe-none {
  pointer-events: none;
}

.pe-auto {
  pointer-events: auto;
}

.rounded {
  border-radius: 4px;
}

.rounded-sm {
  border-radius: 3.2px;
}

.rounded-lg {
  border-radius: 4.8px;
}

.rounded-circle {
  border-radius: 50%;
}

.rounded-pill {
  border-radius: 800px;
}

.rounded-0 {
  border-radius: 0;
}

.rounded-top {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

.rounded-right {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}

.rounded-bottom {
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}

.rounded-left {
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}

.visible {
  visibility: visible;
}

.invisible {
  visibility: hidden;
}

html {
  min-height: 100%;
}

body[dir=rtl] {
  text-align: right;
}

li {
  list-style: none;
}

.img-responsive {
  max-width: 100%;
  display: block;
}

.pt-48px {
  padding-top: 48px;
}

.pt-100px {
  padding-top: 100px;
}

.pb-48px {
  padding-bottom: 48px;
}

.pt-70px {
  padding-top: 70px;
}

@media (min-width: 320px) {
  .container-sm {
    max-width: 100%;
  }

  .container {
    max-width: 100%;
  }
}
@media (min-width: 576px) {
  .col-sm {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-sm-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-sm-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-sm-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-sm-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-sm-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-sm-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-sm-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-sm-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-sm-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.3333333333%;
  }

  .col-sm-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-sm-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-sm-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .col-sm-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.6666666667%;
  }

  .col-sm-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-sm-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.3333333333%;
  }

  .col-sm-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.6666666667%;
  }

  .col-sm-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-sm-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.3333333333%;
  }

  .col-sm-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.6666666667%;
  }

  .col-sm-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-sm-0 {
    margin-left: 0;
  }

  .offset-sm-1 {
    margin-left: 8.3333333333%;
  }

  .offset-sm-2 {
    margin-left: 16.6666666667%;
  }

  .offset-sm-3 {
    margin-left: 25%;
  }

  .offset-sm-4 {
    margin-left: 33.3333333333%;
  }

  .offset-sm-5 {
    margin-left: 41.6666666667%;
  }

  .offset-sm-6 {
    margin-left: 50%;
  }

  .offset-sm-7 {
    margin-left: 58.3333333333%;
  }

  .offset-sm-8 {
    margin-left: 66.6666666667%;
  }

  .offset-sm-9 {
    margin-left: 75%;
  }

  .offset-sm-10 {
    margin-left: 83.3333333333%;
  }

  .offset-sm-11 {
    margin-left: 91.6666666667%;
  }

  .g-sm-0 {
    --bs-gutter-x: 0;
    --bs-gutter-y: 0;
  }

  .gx-sm-0 {
    --bs-gutter-x: 0;
  }

  .gy-sm-0 {
    --bs-gutter-y: 0;
  }

  .g-sm-1 {
    --bs-gutter-x: 5px;
    --bs-gutter-y: 5px;
  }

  .gx-sm-1 {
    --bs-gutter-x: 5px;
  }

  .gy-sm-1 {
    --bs-gutter-y: 5px;
  }

  .g-sm-2 {
    --bs-gutter-x: 10px;
    --bs-gutter-y: 10px;
  }

  .gx-sm-2 {
    --bs-gutter-x: 10px;
  }

  .gy-sm-2 {
    --bs-gutter-y: 10px;
  }

  .g-sm-3 {
    --bs-gutter-x: 15px;
    --bs-gutter-y: 15px;
  }

  .gx-sm-3 {
    --bs-gutter-x: 15px;
  }

  .gy-sm-3 {
    --bs-gutter-y: 15px;
  }

  .g-sm-4 {
    --bs-gutter-x: 20px;
    --bs-gutter-y: 20px;
  }

  .gx-sm-4 {
    --bs-gutter-x: 20px;
  }

  .gy-sm-4 {
    --bs-gutter-y: 20px;
  }

  .g-sm-5 {
    --bs-gutter-x: 25px;
    --bs-gutter-y: 25px;
  }

  .gx-sm-5 {
    --bs-gutter-x: 25px;
  }

  .gy-sm-5 {
    --bs-gutter-y: 25px;
  }

  .g-sm-6 {
    --bs-gutter-x: 30px;
    --bs-gutter-y: 30px;
  }

  .gx-sm-6 {
    --bs-gutter-x: 30px;
  }

  .gy-sm-6 {
    --bs-gutter-y: 30px;
  }

  .g-sm-7 {
    --bs-gutter-x: 35px;
    --bs-gutter-y: 35px;
  }

  .gx-sm-7 {
    --bs-gutter-x: 35px;
  }

  .gy-sm-7 {
    --bs-gutter-y: 35px;
  }

  .g-sm-8 {
    --bs-gutter-x: 40px;
    --bs-gutter-y: 40px;
  }

  .gx-sm-8 {
    --bs-gutter-x: 40px;
  }

  .gy-sm-8 {
    --bs-gutter-y: 40px;
  }

  .g-sm-9 {
    --bs-gutter-x: 45px;
    --bs-gutter-y: 45px;
  }

  .gx-sm-9 {
    --bs-gutter-x: 45px;
  }

  .gy-sm-9 {
    --bs-gutter-y: 45px;
  }

  .g-sm-10 {
    --bs-gutter-x: 50px;
    --bs-gutter-y: 50px;
  }

  .gx-sm-10 {
    --bs-gutter-x: 50px;
  }

  .gy-sm-10 {
    --bs-gutter-y: 50px;
  }

  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }

  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }

  .navbar-expand-sm {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 8px;
    padding-left: 8px;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }

  .card-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
            flex-flow: row wrap;
  }
  .card-group > .card {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom {
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }

  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 4px;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 4px;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }

  .modal-dialog {
    max-width: 500px;
    margin: 28px auto;
  }

  .modal-dialog-scrollable {
    height: calc(100% - 56px);
  }

  .modal-dialog-centered {
    min-height: calc(100% - 56px);
  }

  .modal-sm {
    max-width: 300px;
  }

  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }

  .float-sm-left {
    float: left;
  }

  .float-sm-right {
    float: right;
  }

  .float-sm-none {
    float: none;
  }

  .d-sm-inline {
    display: inline;
  }

  .d-sm-inline-block {
    display: inline-block;
  }

  .d-sm-block {
    display: block;
  }

  .d-sm-table {
    display: table;
  }

  .d-sm-table-row {
    display: table-row;
  }

  .d-sm-table-cell {
    display: table-cell;
  }

  .d-sm-flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .d-sm-inline-flex {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
  }

  .d-sm-none {
    display: none;
  }

  .flex-sm-fill {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
  }

  .flex-sm-row {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }

  .flex-sm-column {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }

  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
  }

  .flex-sm-column-reverse {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }

  .flex-sm-grow-0 {
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }

  .flex-sm-grow-1 {
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }

  .flex-sm-shrink-0 {
    -ms-flex-negative: 0;
        flex-shrink: 0;
  }

  .flex-sm-shrink-1 {
    -ms-flex-negative: 1;
        flex-shrink: 1;
  }

  .flex-sm-wrap {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }

  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
  }

  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse;
        flex-wrap: wrap-reverse;
  }

  .justify-content-sm-start {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }

  .justify-content-sm-end {
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }

  .justify-content-sm-center {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .justify-content-sm-between {
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }

  .justify-content-sm-around {
    -ms-flex-pack: distribute;
        justify-content: space-around;
  }

  .justify-content-sm-evenly {
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
  }

  .align-items-sm-start {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }

  .align-items-sm-end {
    -webkit-box-align: end;
        -ms-flex-align: end;
            align-items: flex-end;
  }

  .align-items-sm-center {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }

  .align-items-sm-baseline {
    -webkit-box-align: baseline;
        -ms-flex-align: baseline;
            align-items: baseline;
  }

  .align-items-sm-stretch {
    -webkit-box-align: stretch;
        -ms-flex-align: stretch;
            align-items: stretch;
  }

  .align-content-sm-start {
    -ms-flex-line-pack: start;
        align-content: flex-start;
  }

  .align-content-sm-end {
    -ms-flex-line-pack: end;
        align-content: flex-end;
  }

  .align-content-sm-center {
    -ms-flex-line-pack: center;
        align-content: center;
  }

  .align-content-sm-between {
    -ms-flex-line-pack: justify;
        align-content: space-between;
  }

  .align-content-sm-around {
    -ms-flex-line-pack: distribute;
        align-content: space-around;
  }

  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch;
        align-content: stretch;
  }

  .align-self-sm-auto {
    -ms-flex-item-align: auto;
        -ms-grid-row-align: auto;
        align-self: auto;
  }

  .align-self-sm-start {
    -ms-flex-item-align: start;
        align-self: flex-start;
  }

  .align-self-sm-end {
    -ms-flex-item-align: end;
        align-self: flex-end;
  }

  .align-self-sm-center {
    -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
  }

  .align-self-sm-baseline {
    -ms-flex-item-align: baseline;
        align-self: baseline;
  }

  .align-self-sm-stretch {
    -ms-flex-item-align: stretch;
        -ms-grid-row-align: stretch;
        align-self: stretch;
  }

  .order-sm-first {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }

  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }

  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .order-sm-last {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .m-sm-0 {
    margin: 0;
  }

  .m-sm-1 {
    margin: 5px;
  }

  .m-sm-2 {
    margin: 10px;
  }

  .m-sm-3 {
    margin: 15px;
  }

  .m-sm-4 {
    margin: 20px;
  }

  .m-sm-5 {
    margin: 25px;
  }

  .m-sm-6 {
    margin: 30px;
  }

  .m-sm-7 {
    margin: 35px;
  }

  .m-sm-8 {
    margin: 40px;
  }

  .m-sm-9 {
    margin: 45px;
  }

  .m-sm-10 {
    margin: 50px;
  }

  .m-sm-auto {
    margin: auto;
  }

  .mx-sm-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-sm-1 {
    margin-right: 5px;
    margin-left: 5px;
  }

  .mx-sm-2 {
    margin-right: 10px;
    margin-left: 10px;
  }

  .mx-sm-3 {
    margin-right: 15px;
    margin-left: 15px;
  }

  .mx-sm-4 {
    margin-right: 20px;
    margin-left: 20px;
  }

  .mx-sm-5 {
    margin-right: 25px;
    margin-left: 25px;
  }

  .mx-sm-6 {
    margin-right: 30px;
    margin-left: 30px;
  }

  .mx-sm-7 {
    margin-right: 35px;
    margin-left: 35px;
  }

  .mx-sm-8 {
    margin-right: 40px;
    margin-left: 40px;
  }

  .mx-sm-9 {
    margin-right: 45px;
    margin-left: 45px;
  }

  .mx-sm-10 {
    margin-right: 50px;
    margin-left: 50px;
  }

  .mx-sm-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-sm-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-sm-1 {
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .my-sm-2 {
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .my-sm-3 {
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .my-sm-4 {
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .my-sm-5 {
    margin-top: 25px;
    margin-bottom: 25px;
  }

  .my-sm-6 {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .my-sm-7 {
    margin-top: 35px;
    margin-bottom: 35px;
  }

  .my-sm-8 {
    margin-top: 40px;
    margin-bottom: 40px;
  }

  .my-sm-9 {
    margin-top: 45px;
    margin-bottom: 45px;
  }

  .my-sm-10 {
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .my-sm-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-sm-0 {
    margin-top: 0;
  }

  .mt-sm-1 {
    margin-top: 5px;
  }

  .mt-sm-2 {
    margin-top: 10px;
  }

  .mt-sm-3 {
    margin-top: 15px;
  }

  .mt-sm-4 {
    margin-top: 20px;
  }

  .mt-sm-5 {
    margin-top: 25px;
  }

  .mt-sm-6 {
    margin-top: 30px;
  }

  .mt-sm-7 {
    margin-top: 35px;
  }

  .mt-sm-8 {
    margin-top: 40px;
  }

  .mt-sm-9 {
    margin-top: 45px;
  }

  .mt-sm-10 {
    margin-top: 50px;
  }

  .mt-sm-auto {
    margin-top: auto;
  }

  .mr-sm-0 {
    margin-right: 0;
  }

  .mr-sm-1 {
    margin-right: 5px;
  }

  .mr-sm-2 {
    margin-right: 10px;
  }

  .mr-sm-3 {
    margin-right: 15px;
  }

  .mr-sm-4 {
    margin-right: 20px;
  }

  .mr-sm-5 {
    margin-right: 25px;
  }

  .mr-sm-6 {
    margin-right: 30px;
  }

  .mr-sm-7 {
    margin-right: 35px;
  }

  .mr-sm-8 {
    margin-right: 40px;
  }

  .mr-sm-9 {
    margin-right: 45px;
  }

  .mr-sm-10 {
    margin-right: 50px;
  }

  .mr-sm-auto {
    margin-right: auto;
  }

  .mb-sm-0 {
    margin-bottom: 0;
  }

  .mb-sm-1 {
    margin-bottom: 5px;
  }

  .mb-sm-2 {
    margin-bottom: 10px;
  }

  .mb-sm-3 {
    margin-bottom: 15px;
  }

  .mb-sm-4 {
    margin-bottom: 20px;
  }

  .mb-sm-5 {
    margin-bottom: 25px;
  }

  .mb-sm-6 {
    margin-bottom: 30px;
  }

  .mb-sm-7 {
    margin-bottom: 35px;
  }

  .mb-sm-8 {
    margin-bottom: 40px;
  }

  .mb-sm-9 {
    margin-bottom: 45px;
  }

  .mb-sm-10 {
    margin-bottom: 50px;
  }

  .mb-sm-auto {
    margin-bottom: auto;
  }

  .ml-sm-0 {
    margin-left: 0;
  }

  .ml-sm-1 {
    margin-left: 5px;
  }

  .ml-sm-2 {
    margin-left: 10px;
  }

  .ml-sm-3 {
    margin-left: 15px;
  }

  .ml-sm-4 {
    margin-left: 20px;
  }

  .ml-sm-5 {
    margin-left: 25px;
  }

  .ml-sm-6 {
    margin-left: 30px;
  }

  .ml-sm-7 {
    margin-left: 35px;
  }

  .ml-sm-8 {
    margin-left: 40px;
  }

  .ml-sm-9 {
    margin-left: 45px;
  }

  .ml-sm-10 {
    margin-left: 50px;
  }

  .ml-sm-auto {
    margin-left: auto;
  }

  .m-sm-n1 {
    margin: -5px;
  }

  .m-sm-n2 {
    margin: -10px;
  }

  .m-sm-n3 {
    margin: -15px;
  }

  .m-sm-n4 {
    margin: -20px;
  }

  .m-sm-n5 {
    margin: -25px;
  }

  .m-sm-n6 {
    margin: -30px;
  }

  .m-sm-n7 {
    margin: -35px;
  }

  .m-sm-n8 {
    margin: -40px;
  }

  .m-sm-n9 {
    margin: -45px;
  }

  .m-sm-n10 {
    margin: -50px;
  }

  .mx-sm-n1 {
    margin-right: -5px;
    margin-left: -5px;
  }

  .mx-sm-n2 {
    margin-right: -10px;
    margin-left: -10px;
  }

  .mx-sm-n3 {
    margin-right: -15px;
    margin-left: -15px;
  }

  .mx-sm-n4 {
    margin-right: -20px;
    margin-left: -20px;
  }

  .mx-sm-n5 {
    margin-right: -25px;
    margin-left: -25px;
  }

  .mx-sm-n6 {
    margin-right: -30px;
    margin-left: -30px;
  }

  .mx-sm-n7 {
    margin-right: -35px;
    margin-left: -35px;
  }

  .mx-sm-n8 {
    margin-right: -40px;
    margin-left: -40px;
  }

  .mx-sm-n9 {
    margin-right: -45px;
    margin-left: -45px;
  }

  .mx-sm-n10 {
    margin-right: -50px;
    margin-left: -50px;
  }

  .my-sm-n1 {
    margin-top: -5px;
    margin-bottom: -5px;
  }

  .my-sm-n2 {
    margin-top: -10px;
    margin-bottom: -10px;
  }

  .my-sm-n3 {
    margin-top: -15px;
    margin-bottom: -15px;
  }

  .my-sm-n4 {
    margin-top: -20px;
    margin-bottom: -20px;
  }

  .my-sm-n5 {
    margin-top: -25px;
    margin-bottom: -25px;
  }

  .my-sm-n6 {
    margin-top: -30px;
    margin-bottom: -30px;
  }

  .my-sm-n7 {
    margin-top: -35px;
    margin-bottom: -35px;
  }

  .my-sm-n8 {
    margin-top: -40px;
    margin-bottom: -40px;
  }

  .my-sm-n9 {
    margin-top: -45px;
    margin-bottom: -45px;
  }

  .my-sm-n10 {
    margin-top: -50px;
    margin-bottom: -50px;
  }

  .mt-sm-n1 {
    margin-top: -5px;
  }

  .mt-sm-n2 {
    margin-top: -10px;
  }

  .mt-sm-n3 {
    margin-top: -15px;
  }

  .mt-sm-n4 {
    margin-top: -20px;
  }

  .mt-sm-n5 {
    margin-top: -25px;
  }

  .mt-sm-n6 {
    margin-top: -30px;
  }

  .mt-sm-n7 {
    margin-top: -35px;
  }

  .mt-sm-n8 {
    margin-top: -40px;
  }

  .mt-sm-n9 {
    margin-top: -45px;
  }

  .mt-sm-n10 {
    margin-top: -50px;
  }

  .mr-sm-n1 {
    margin-right: -5px;
  }

  .mr-sm-n2 {
    margin-right: -10px;
  }

  .mr-sm-n3 {
    margin-right: -15px;
  }

  .mr-sm-n4 {
    margin-right: -20px;
  }

  .mr-sm-n5 {
    margin-right: -25px;
  }

  .mr-sm-n6 {
    margin-right: -30px;
  }

  .mr-sm-n7 {
    margin-right: -35px;
  }

  .mr-sm-n8 {
    margin-right: -40px;
  }

  .mr-sm-n9 {
    margin-right: -45px;
  }

  .mr-sm-n10 {
    margin-right: -50px;
  }

  .mb-sm-n1 {
    margin-bottom: -5px;
  }

  .mb-sm-n2 {
    margin-bottom: -10px;
  }

  .mb-sm-n3 {
    margin-bottom: -15px;
  }

  .mb-sm-n4 {
    margin-bottom: -20px;
  }

  .mb-sm-n5 {
    margin-bottom: -25px;
  }

  .mb-sm-n6 {
    margin-bottom: -30px;
  }

  .mb-sm-n7 {
    margin-bottom: -35px;
  }

  .mb-sm-n8 {
    margin-bottom: -40px;
  }

  .mb-sm-n9 {
    margin-bottom: -45px;
  }

  .mb-sm-n10 {
    margin-bottom: -50px;
  }

  .ml-sm-n1 {
    margin-left: -5px;
  }

  .ml-sm-n2 {
    margin-left: -10px;
  }

  .ml-sm-n3 {
    margin-left: -15px;
  }

  .ml-sm-n4 {
    margin-left: -20px;
  }

  .ml-sm-n5 {
    margin-left: -25px;
  }

  .ml-sm-n6 {
    margin-left: -30px;
  }

  .ml-sm-n7 {
    margin-left: -35px;
  }

  .ml-sm-n8 {
    margin-left: -40px;
  }

  .ml-sm-n9 {
    margin-left: -45px;
  }

  .ml-sm-n10 {
    margin-left: -50px;
  }

  .p-sm-0 {
    padding: 0;
  }

  .p-sm-1 {
    padding: 5px;
  }

  .p-sm-2 {
    padding: 10px;
  }

  .p-sm-3 {
    padding: 15px;
  }

  .p-sm-4 {
    padding: 20px;
  }

  .p-sm-5 {
    padding: 25px;
  }

  .p-sm-6 {
    padding: 30px;
  }

  .p-sm-7 {
    padding: 35px;
  }

  .p-sm-8 {
    padding: 40px;
  }

  .p-sm-9 {
    padding: 45px;
  }

  .p-sm-10 {
    padding: 50px;
  }

  .px-sm-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-sm-1 {
    padding-right: 5px;
    padding-left: 5px;
  }

  .px-sm-2 {
    padding-right: 10px;
    padding-left: 10px;
  }

  .px-sm-3 {
    padding-right: 15px;
    padding-left: 15px;
  }

  .px-sm-4 {
    padding-right: 20px;
    padding-left: 20px;
  }

  .px-sm-5 {
    padding-right: 25px;
    padding-left: 25px;
  }

  .px-sm-6 {
    padding-right: 30px;
    padding-left: 30px;
  }

  .px-sm-7 {
    padding-right: 35px;
    padding-left: 35px;
  }

  .px-sm-8 {
    padding-right: 40px;
    padding-left: 40px;
  }

  .px-sm-9 {
    padding-right: 45px;
    padding-left: 45px;
  }

  .px-sm-10 {
    padding-right: 50px;
    padding-left: 50px;
  }

  .py-sm-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-sm-1 {
    padding-top: 5px;
    padding-bottom: 5px;
  }

  .py-sm-2 {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .py-sm-3 {
    padding-top: 15px;
    padding-bottom: 15px;
  }

  .py-sm-4 {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .py-sm-5 {
    padding-top: 25px;
    padding-bottom: 25px;
  }

  .py-sm-6 {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .py-sm-7 {
    padding-top: 35px;
    padding-bottom: 35px;
  }

  .py-sm-8 {
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .py-sm-9 {
    padding-top: 45px;
    padding-bottom: 45px;
  }

  .py-sm-10 {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .pt-sm-0 {
    padding-top: 0;
  }

  .pt-sm-1 {
    padding-top: 5px;
  }

  .pt-sm-2 {
    padding-top: 10px;
  }

  .pt-sm-3 {
    padding-top: 15px;
  }

  .pt-sm-4 {
    padding-top: 20px;
  }

  .pt-sm-5 {
    padding-top: 25px;
  }

  .pt-sm-6 {
    padding-top: 30px;
  }

  .pt-sm-7 {
    padding-top: 35px;
  }

  .pt-sm-8 {
    padding-top: 40px;
  }

  .pt-sm-9 {
    padding-top: 45px;
  }

  .pt-sm-10 {
    padding-top: 50px;
  }

  .pr-sm-0 {
    padding-right: 0;
  }

  .pr-sm-1 {
    padding-right: 5px;
  }

  .pr-sm-2 {
    padding-right: 10px;
  }

  .pr-sm-3 {
    padding-right: 15px;
  }

  .pr-sm-4 {
    padding-right: 20px;
  }

  .pr-sm-5 {
    padding-right: 25px;
  }

  .pr-sm-6 {
    padding-right: 30px;
  }

  .pr-sm-7 {
    padding-right: 35px;
  }

  .pr-sm-8 {
    padding-right: 40px;
  }

  .pr-sm-9 {
    padding-right: 45px;
  }

  .pr-sm-10 {
    padding-right: 50px;
  }

  .pb-sm-0 {
    padding-bottom: 0;
  }

  .pb-sm-1 {
    padding-bottom: 5px;
  }

  .pb-sm-2 {
    padding-bottom: 10px;
  }

  .pb-sm-3 {
    padding-bottom: 15px;
  }

  .pb-sm-4 {
    padding-bottom: 20px;
  }

  .pb-sm-5 {
    padding-bottom: 25px;
  }

  .pb-sm-6 {
    padding-bottom: 30px;
  }

  .pb-sm-7 {
    padding-bottom: 35px;
  }

  .pb-sm-8 {
    padding-bottom: 40px;
  }

  .pb-sm-9 {
    padding-bottom: 45px;
  }

  .pb-sm-10 {
    padding-bottom: 50px;
  }

  .pl-sm-0 {
    padding-left: 0;
  }

  .pl-sm-1 {
    padding-left: 5px;
  }

  .pl-sm-2 {
    padding-left: 10px;
  }

  .pl-sm-3 {
    padding-left: 15px;
  }

  .pl-sm-4 {
    padding-left: 20px;
  }

  .pl-sm-5 {
    padding-left: 25px;
  }

  .pl-sm-6 {
    padding-left: 30px;
  }

  .pl-sm-7 {
    padding-left: 35px;
  }

  .pl-sm-8 {
    padding-left: 40px;
  }

  .pl-sm-9 {
    padding-left: 45px;
  }

  .pl-sm-10 {
    padding-left: 50px;
  }

  .text-sm-left {
    text-align: left;
  }

  .text-sm-right {
    text-align: right;
  }

  .text-sm-center {
    text-align: center;
  }
}
@media (max-width: 767px) {
  .container-sm {
    padding-right: 15px;
    padding-left: 15px;
  }

  .container {
    padding-right: 15px;
    padding-left: 15px;
  }
}
@media (min-width: 768px) {
  .container-md {
    max-width: 738px;
  }

  .container-sm {
    max-width: 738px;
  }

  .container {
    max-width: 738px;
  }

  .col-md {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-md-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-md-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-md-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-md-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-md-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-md-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-md-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-md-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-md-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.3333333333%;
  }

  .col-md-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-md-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-md-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .col-md-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.6666666667%;
  }

  .col-md-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-md-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.3333333333%;
  }

  .col-md-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.6666666667%;
  }

  .col-md-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-md-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.3333333333%;
  }

  .col-md-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.6666666667%;
  }

  .col-md-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-md-0 {
    margin-left: 0;
  }

  .offset-md-1 {
    margin-left: 8.3333333333%;
  }

  .offset-md-2 {
    margin-left: 16.6666666667%;
  }

  .offset-md-3 {
    margin-left: 25%;
  }

  .offset-md-4 {
    margin-left: 33.3333333333%;
  }

  .offset-md-5 {
    margin-left: 41.6666666667%;
  }

  .offset-md-6 {
    margin-left: 50%;
  }

  .offset-md-7 {
    margin-left: 58.3333333333%;
  }

  .offset-md-8 {
    margin-left: 66.6666666667%;
  }

  .offset-md-9 {
    margin-left: 75%;
  }

  .offset-md-10 {
    margin-left: 83.3333333333%;
  }

  .offset-md-11 {
    margin-left: 91.6666666667%;
  }

  .g-md-0 {
    --bs-gutter-x: 0;
    --bs-gutter-y: 0;
  }

  .gx-md-0 {
    --bs-gutter-x: 0;
  }

  .gy-md-0 {
    --bs-gutter-y: 0;
  }

  .g-md-1 {
    --bs-gutter-x: 5px;
    --bs-gutter-y: 5px;
  }

  .gx-md-1 {
    --bs-gutter-x: 5px;
  }

  .gy-md-1 {
    --bs-gutter-y: 5px;
  }

  .g-md-2 {
    --bs-gutter-x: 10px;
    --bs-gutter-y: 10px;
  }

  .gx-md-2 {
    --bs-gutter-x: 10px;
  }

  .gy-md-2 {
    --bs-gutter-y: 10px;
  }

  .g-md-3 {
    --bs-gutter-x: 15px;
    --bs-gutter-y: 15px;
  }

  .gx-md-3 {
    --bs-gutter-x: 15px;
  }

  .gy-md-3 {
    --bs-gutter-y: 15px;
  }

  .g-md-4 {
    --bs-gutter-x: 20px;
    --bs-gutter-y: 20px;
  }

  .gx-md-4 {
    --bs-gutter-x: 20px;
  }

  .gy-md-4 {
    --bs-gutter-y: 20px;
  }

  .g-md-5 {
    --bs-gutter-x: 25px;
    --bs-gutter-y: 25px;
  }

  .gx-md-5 {
    --bs-gutter-x: 25px;
  }

  .gy-md-5 {
    --bs-gutter-y: 25px;
  }

  .g-md-6 {
    --bs-gutter-x: 30px;
    --bs-gutter-y: 30px;
  }

  .gx-md-6 {
    --bs-gutter-x: 30px;
  }

  .gy-md-6 {
    --bs-gutter-y: 30px;
  }

  .g-md-7 {
    --bs-gutter-x: 35px;
    --bs-gutter-y: 35px;
  }

  .gx-md-7 {
    --bs-gutter-x: 35px;
  }

  .gy-md-7 {
    --bs-gutter-y: 35px;
  }

  .g-md-8 {
    --bs-gutter-x: 40px;
    --bs-gutter-y: 40px;
  }

  .gx-md-8 {
    --bs-gutter-x: 40px;
  }

  .gy-md-8 {
    --bs-gutter-y: 40px;
  }

  .g-md-9 {
    --bs-gutter-x: 45px;
    --bs-gutter-y: 45px;
  }

  .gx-md-9 {
    --bs-gutter-x: 45px;
  }

  .gy-md-9 {
    --bs-gutter-y: 45px;
  }

  .g-md-10 {
    --bs-gutter-x: 50px;
    --bs-gutter-y: 50px;
  }

  .gx-md-10 {
    --bs-gutter-x: 50px;
  }

  .gy-md-10 {
    --bs-gutter-y: 50px;
  }

  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }

  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }

  .navbar-expand-md {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 8px;
    padding-left: 8px;
  }
  .navbar-expand-md .navbar-collapse {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }

  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 4px;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 4px;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }

  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }

  .float-md-left {
    float: left;
  }

  .float-md-right {
    float: right;
  }

  .float-md-none {
    float: none;
  }

  .d-md-inline {
    display: inline;
  }

  .d-md-inline-block {
    display: inline-block;
  }

  .d-md-block {
    display: block;
  }

  .d-md-table {
    display: table;
  }

  .d-md-table-row {
    display: table-row;
  }

  .d-md-table-cell {
    display: table-cell;
  }

  .d-md-flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .d-md-inline-flex {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
  }

  .d-md-none {
    display: none;
  }

  .flex-md-fill {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
  }

  .flex-md-row {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }

  .flex-md-column {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }

  .flex-md-row-reverse {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
  }

  .flex-md-column-reverse {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }

  .flex-md-grow-0 {
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }

  .flex-md-grow-1 {
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }

  .flex-md-shrink-0 {
    -ms-flex-negative: 0;
        flex-shrink: 0;
  }

  .flex-md-shrink-1 {
    -ms-flex-negative: 1;
        flex-shrink: 1;
  }

  .flex-md-wrap {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }

  .flex-md-nowrap {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
  }

  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse;
        flex-wrap: wrap-reverse;
  }

  .justify-content-md-start {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }

  .justify-content-md-end {
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }

  .justify-content-md-center {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .justify-content-md-between {
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }

  .justify-content-md-around {
    -ms-flex-pack: distribute;
        justify-content: space-around;
  }

  .justify-content-md-evenly {
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
  }

  .align-items-md-start {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }

  .align-items-md-end {
    -webkit-box-align: end;
        -ms-flex-align: end;
            align-items: flex-end;
  }

  .align-items-md-center {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }

  .align-items-md-baseline {
    -webkit-box-align: baseline;
        -ms-flex-align: baseline;
            align-items: baseline;
  }

  .align-items-md-stretch {
    -webkit-box-align: stretch;
        -ms-flex-align: stretch;
            align-items: stretch;
  }

  .align-content-md-start {
    -ms-flex-line-pack: start;
        align-content: flex-start;
  }

  .align-content-md-end {
    -ms-flex-line-pack: end;
        align-content: flex-end;
  }

  .align-content-md-center {
    -ms-flex-line-pack: center;
        align-content: center;
  }

  .align-content-md-between {
    -ms-flex-line-pack: justify;
        align-content: space-between;
  }

  .align-content-md-around {
    -ms-flex-line-pack: distribute;
        align-content: space-around;
  }

  .align-content-md-stretch {
    -ms-flex-line-pack: stretch;
        align-content: stretch;
  }

  .align-self-md-auto {
    -ms-flex-item-align: auto;
        -ms-grid-row-align: auto;
        align-self: auto;
  }

  .align-self-md-start {
    -ms-flex-item-align: start;
        align-self: flex-start;
  }

  .align-self-md-end {
    -ms-flex-item-align: end;
        align-self: flex-end;
  }

  .align-self-md-center {
    -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
  }

  .align-self-md-baseline {
    -ms-flex-item-align: baseline;
        align-self: baseline;
  }

  .align-self-md-stretch {
    -ms-flex-item-align: stretch;
        -ms-grid-row-align: stretch;
        align-self: stretch;
  }

  .order-md-first {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }

  .order-md-0 {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }

  .order-md-1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .order-md-2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .order-md-3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .order-md-4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .order-md-5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .order-md-last {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .m-md-0 {
    margin: 0;
  }

  .m-md-1 {
    margin: 5px;
  }

  .m-md-2 {
    margin: 10px;
  }

  .m-md-3 {
    margin: 15px;
  }

  .m-md-4 {
    margin: 20px;
  }

  .m-md-5 {
    margin: 25px;
  }

  .m-md-6 {
    margin: 30px;
  }

  .m-md-7 {
    margin: 35px;
  }

  .m-md-8 {
    margin: 40px;
  }

  .m-md-9 {
    margin: 45px;
  }

  .m-md-10 {
    margin: 50px;
  }

  .m-md-auto {
    margin: auto;
  }

  .mx-md-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-md-1 {
    margin-right: 5px;
    margin-left: 5px;
  }

  .mx-md-2 {
    margin-right: 10px;
    margin-left: 10px;
  }

  .mx-md-3 {
    margin-right: 15px;
    margin-left: 15px;
  }

  .mx-md-4 {
    margin-right: 20px;
    margin-left: 20px;
  }

  .mx-md-5 {
    margin-right: 25px;
    margin-left: 25px;
  }

  .mx-md-6 {
    margin-right: 30px;
    margin-left: 30px;
  }

  .mx-md-7 {
    margin-right: 35px;
    margin-left: 35px;
  }

  .mx-md-8 {
    margin-right: 40px;
    margin-left: 40px;
  }

  .mx-md-9 {
    margin-right: 45px;
    margin-left: 45px;
  }

  .mx-md-10 {
    margin-right: 50px;
    margin-left: 50px;
  }

  .mx-md-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-md-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-md-1 {
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .my-md-2 {
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .my-md-3 {
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .my-md-4 {
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .my-md-5 {
    margin-top: 25px;
    margin-bottom: 25px;
  }

  .my-md-6 {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .my-md-7 {
    margin-top: 35px;
    margin-bottom: 35px;
  }

  .my-md-8 {
    margin-top: 40px;
    margin-bottom: 40px;
  }

  .my-md-9 {
    margin-top: 45px;
    margin-bottom: 45px;
  }

  .my-md-10 {
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .my-md-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-md-0 {
    margin-top: 0;
  }

  .mt-md-1 {
    margin-top: 5px;
  }

  .mt-md-2 {
    margin-top: 10px;
  }

  .mt-md-3 {
    margin-top: 15px;
  }

  .mt-md-4 {
    margin-top: 20px;
  }

  .mt-md-5 {
    margin-top: 25px;
  }

  .mt-md-6 {
    margin-top: 30px;
  }

  .mt-md-7 {
    margin-top: 35px;
  }

  .mt-md-8 {
    margin-top: 40px;
  }

  .mt-md-9 {
    margin-top: 45px;
  }

  .mt-md-10 {
    margin-top: 50px;
  }

  .mt-md-auto {
    margin-top: auto;
  }

  .mr-md-0 {
    margin-right: 0;
  }

  .mr-md-1 {
    margin-right: 5px;
  }

  .mr-md-2 {
    margin-right: 10px;
  }

  .mr-md-3 {
    margin-right: 15px;
  }

  .mr-md-4 {
    margin-right: 20px;
  }

  .mr-md-5 {
    margin-right: 25px;
  }

  .mr-md-6 {
    margin-right: 30px;
  }

  .mr-md-7 {
    margin-right: 35px;
  }

  .mr-md-8 {
    margin-right: 40px;
  }

  .mr-md-9 {
    margin-right: 45px;
  }

  .mr-md-10 {
    margin-right: 50px;
  }

  .mr-md-auto {
    margin-right: auto;
  }

  .mb-md-0 {
    margin-bottom: 0;
  }

  .mb-md-1 {
    margin-bottom: 5px;
  }

  .mb-md-2 {
    margin-bottom: 10px;
  }

  .mb-md-3 {
    margin-bottom: 15px;
  }

  .mb-md-4 {
    margin-bottom: 20px;
  }

  .mb-md-5 {
    margin-bottom: 25px;
  }

  .mb-md-6 {
    margin-bottom: 30px;
  }

  .mb-md-7 {
    margin-bottom: 35px;
  }

  .mb-md-8 {
    margin-bottom: 40px;
  }

  .mb-md-9 {
    margin-bottom: 45px;
  }

  .mb-md-10 {
    margin-bottom: 50px;
  }

  .mb-md-auto {
    margin-bottom: auto;
  }

  .ml-md-0 {
    margin-left: 0;
  }

  .ml-md-1 {
    margin-left: 5px;
  }

  .ml-md-2 {
    margin-left: 10px;
  }

  .ml-md-3 {
    margin-left: 15px;
  }

  .ml-md-4 {
    margin-left: 20px;
  }

  .ml-md-5 {
    margin-left: 25px;
  }

  .ml-md-6 {
    margin-left: 30px;
  }

  .ml-md-7 {
    margin-left: 35px;
  }

  .ml-md-8 {
    margin-left: 40px;
  }

  .ml-md-9 {
    margin-left: 45px;
  }

  .ml-md-10 {
    margin-left: 50px;
  }

  .ml-md-auto {
    margin-left: auto;
  }

  .m-md-n1 {
    margin: -5px;
  }

  .m-md-n2 {
    margin: -10px;
  }

  .m-md-n3 {
    margin: -15px;
  }

  .m-md-n4 {
    margin: -20px;
  }

  .m-md-n5 {
    margin: -25px;
  }

  .m-md-n6 {
    margin: -30px;
  }

  .m-md-n7 {
    margin: -35px;
  }

  .m-md-n8 {
    margin: -40px;
  }

  .m-md-n9 {
    margin: -45px;
  }

  .m-md-n10 {
    margin: -50px;
  }

  .mx-md-n1 {
    margin-right: -5px;
    margin-left: -5px;
  }

  .mx-md-n2 {
    margin-right: -10px;
    margin-left: -10px;
  }

  .mx-md-n3 {
    margin-right: -15px;
    margin-left: -15px;
  }

  .mx-md-n4 {
    margin-right: -20px;
    margin-left: -20px;
  }

  .mx-md-n5 {
    margin-right: -25px;
    margin-left: -25px;
  }

  .mx-md-n6 {
    margin-right: -30px;
    margin-left: -30px;
  }

  .mx-md-n7 {
    margin-right: -35px;
    margin-left: -35px;
  }

  .mx-md-n8 {
    margin-right: -40px;
    margin-left: -40px;
  }

  .mx-md-n9 {
    margin-right: -45px;
    margin-left: -45px;
  }

  .mx-md-n10 {
    margin-right: -50px;
    margin-left: -50px;
  }

  .my-md-n1 {
    margin-top: -5px;
    margin-bottom: -5px;
  }

  .my-md-n2 {
    margin-top: -10px;
    margin-bottom: -10px;
  }

  .my-md-n3 {
    margin-top: -15px;
    margin-bottom: -15px;
  }

  .my-md-n4 {
    margin-top: -20px;
    margin-bottom: -20px;
  }

  .my-md-n5 {
    margin-top: -25px;
    margin-bottom: -25px;
  }

  .my-md-n6 {
    margin-top: -30px;
    margin-bottom: -30px;
  }

  .my-md-n7 {
    margin-top: -35px;
    margin-bottom: -35px;
  }

  .my-md-n8 {
    margin-top: -40px;
    margin-bottom: -40px;
  }

  .my-md-n9 {
    margin-top: -45px;
    margin-bottom: -45px;
  }

  .my-md-n10 {
    margin-top: -50px;
    margin-bottom: -50px;
  }

  .mt-md-n1 {
    margin-top: -5px;
  }

  .mt-md-n2 {
    margin-top: -10px;
  }

  .mt-md-n3 {
    margin-top: -15px;
  }

  .mt-md-n4 {
    margin-top: -20px;
  }

  .mt-md-n5 {
    margin-top: -25px;
  }

  .mt-md-n6 {
    margin-top: -30px;
  }

  .mt-md-n7 {
    margin-top: -35px;
  }

  .mt-md-n8 {
    margin-top: -40px;
  }

  .mt-md-n9 {
    margin-top: -45px;
  }

  .mt-md-n10 {
    margin-top: -50px;
  }

  .mr-md-n1 {
    margin-right: -5px;
  }

  .mr-md-n2 {
    margin-right: -10px;
  }

  .mr-md-n3 {
    margin-right: -15px;
  }

  .mr-md-n4 {
    margin-right: -20px;
  }

  .mr-md-n5 {
    margin-right: -25px;
  }

  .mr-md-n6 {
    margin-right: -30px;
  }

  .mr-md-n7 {
    margin-right: -35px;
  }

  .mr-md-n8 {
    margin-right: -40px;
  }

  .mr-md-n9 {
    margin-right: -45px;
  }

  .mr-md-n10 {
    margin-right: -50px;
  }

  .mb-md-n1 {
    margin-bottom: -5px;
  }

  .mb-md-n2 {
    margin-bottom: -10px;
  }

  .mb-md-n3 {
    margin-bottom: -15px;
  }

  .mb-md-n4 {
    margin-bottom: -20px;
  }

  .mb-md-n5 {
    margin-bottom: -25px;
  }

  .mb-md-n6 {
    margin-bottom: -30px;
  }

  .mb-md-n7 {
    margin-bottom: -35px;
  }

  .mb-md-n8 {
    margin-bottom: -40px;
  }

  .mb-md-n9 {
    margin-bottom: -45px;
  }

  .mb-md-n10 {
    margin-bottom: -50px;
  }

  .ml-md-n1 {
    margin-left: -5px;
  }

  .ml-md-n2 {
    margin-left: -10px;
  }

  .ml-md-n3 {
    margin-left: -15px;
  }

  .ml-md-n4 {
    margin-left: -20px;
  }

  .ml-md-n5 {
    margin-left: -25px;
  }

  .ml-md-n6 {
    margin-left: -30px;
  }

  .ml-md-n7 {
    margin-left: -35px;
  }

  .ml-md-n8 {
    margin-left: -40px;
  }

  .ml-md-n9 {
    margin-left: -45px;
  }

  .ml-md-n10 {
    margin-left: -50px;
  }

  .p-md-0 {
    padding: 0;
  }

  .p-md-1 {
    padding: 5px;
  }

  .p-md-2 {
    padding: 10px;
  }

  .p-md-3 {
    padding: 15px;
  }

  .p-md-4 {
    padding: 20px;
  }

  .p-md-5 {
    padding: 25px;
  }

  .p-md-6 {
    padding: 30px;
  }

  .p-md-7 {
    padding: 35px;
  }

  .p-md-8 {
    padding: 40px;
  }

  .p-md-9 {
    padding: 45px;
  }

  .p-md-10 {
    padding: 50px;
  }

  .px-md-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-md-1 {
    padding-right: 5px;
    padding-left: 5px;
  }

  .px-md-2 {
    padding-right: 10px;
    padding-left: 10px;
  }

  .px-md-3 {
    padding-right: 15px;
    padding-left: 15px;
  }

  .px-md-4 {
    padding-right: 20px;
    padding-left: 20px;
  }

  .px-md-5 {
    padding-right: 25px;
    padding-left: 25px;
  }

  .px-md-6 {
    padding-right: 30px;
    padding-left: 30px;
  }

  .px-md-7 {
    padding-right: 35px;
    padding-left: 35px;
  }

  .px-md-8 {
    padding-right: 40px;
    padding-left: 40px;
  }

  .px-md-9 {
    padding-right: 45px;
    padding-left: 45px;
  }

  .px-md-10 {
    padding-right: 50px;
    padding-left: 50px;
  }

  .py-md-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-md-1 {
    padding-top: 5px;
    padding-bottom: 5px;
  }

  .py-md-2 {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .py-md-3 {
    padding-top: 15px;
    padding-bottom: 15px;
  }

  .py-md-4 {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .py-md-5 {
    padding-top: 25px;
    padding-bottom: 25px;
  }

  .py-md-6 {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .py-md-7 {
    padding-top: 35px;
    padding-bottom: 35px;
  }

  .py-md-8 {
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .py-md-9 {
    padding-top: 45px;
    padding-bottom: 45px;
  }

  .py-md-10 {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .pt-md-0 {
    padding-top: 0;
  }

  .pt-md-1 {
    padding-top: 5px;
  }

  .pt-md-2 {
    padding-top: 10px;
  }

  .pt-md-3 {
    padding-top: 15px;
  }

  .pt-md-4 {
    padding-top: 20px;
  }

  .pt-md-5 {
    padding-top: 25px;
  }

  .pt-md-6 {
    padding-top: 30px;
  }

  .pt-md-7 {
    padding-top: 35px;
  }

  .pt-md-8 {
    padding-top: 40px;
  }

  .pt-md-9 {
    padding-top: 45px;
  }

  .pt-md-10 {
    padding-top: 50px;
  }

  .pr-md-0 {
    padding-right: 0;
  }

  .pr-md-1 {
    padding-right: 5px;
  }

  .pr-md-2 {
    padding-right: 10px;
  }

  .pr-md-3 {
    padding-right: 15px;
  }

  .pr-md-4 {
    padding-right: 20px;
  }

  .pr-md-5 {
    padding-right: 25px;
  }

  .pr-md-6 {
    padding-right: 30px;
  }

  .pr-md-7 {
    padding-right: 35px;
  }

  .pr-md-8 {
    padding-right: 40px;
  }

  .pr-md-9 {
    padding-right: 45px;
  }

  .pr-md-10 {
    padding-right: 50px;
  }

  .pb-md-0 {
    padding-bottom: 0;
  }

  .pb-md-1 {
    padding-bottom: 5px;
  }

  .pb-md-2 {
    padding-bottom: 10px;
  }

  .pb-md-3 {
    padding-bottom: 15px;
  }

  .pb-md-4 {
    padding-bottom: 20px;
  }

  .pb-md-5 {
    padding-bottom: 25px;
  }

  .pb-md-6 {
    padding-bottom: 30px;
  }

  .pb-md-7 {
    padding-bottom: 35px;
  }

  .pb-md-8 {
    padding-bottom: 40px;
  }

  .pb-md-9 {
    padding-bottom: 45px;
  }

  .pb-md-10 {
    padding-bottom: 50px;
  }

  .pl-md-0 {
    padding-left: 0;
  }

  .pl-md-1 {
    padding-left: 5px;
  }

  .pl-md-2 {
    padding-left: 10px;
  }

  .pl-md-3 {
    padding-left: 15px;
  }

  .pl-md-4 {
    padding-left: 20px;
  }

  .pl-md-5 {
    padding-left: 25px;
  }

  .pl-md-6 {
    padding-left: 30px;
  }

  .pl-md-7 {
    padding-left: 35px;
  }

  .pl-md-8 {
    padding-left: 40px;
  }

  .pl-md-9 {
    padding-left: 45px;
  }

  .pl-md-10 {
    padding-left: 50px;
  }

  .text-md-left {
    text-align: left;
  }

  .text-md-right {
    text-align: right;
  }

  .text-md-center {
    text-align: center;
  }
}
@media (min-width: 992px) {
  .container-lg {
    max-width: 960px;
  }

  .container-md {
    max-width: 960px;
  }

  .container-sm {
    max-width: 960px;
  }

  .container {
    max-width: 960px;
  }

  .col-lg {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-lg-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-lg-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-lg-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-lg-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-lg-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-lg-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-lg-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-lg-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-lg-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.3333333333%;
  }

  .col-lg-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-lg-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-lg-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .col-lg-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.6666666667%;
  }

  .col-lg-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-lg-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.3333333333%;
  }

  .col-lg-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.6666666667%;
  }

  .col-lg-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-lg-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.3333333333%;
  }

  .col-lg-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.6666666667%;
  }

  .col-lg-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-lg-0 {
    margin-left: 0;
  }

  .offset-lg-1 {
    margin-left: 8.3333333333%;
  }

  .offset-lg-2 {
    margin-left: 16.6666666667%;
  }

  .offset-lg-3 {
    margin-left: 25%;
  }

  .offset-lg-4 {
    margin-left: 33.3333333333%;
  }

  .offset-lg-5 {
    margin-left: 41.6666666667%;
  }

  .offset-lg-6 {
    margin-left: 50%;
  }

  .offset-lg-7 {
    margin-left: 58.3333333333%;
  }

  .offset-lg-8 {
    margin-left: 66.6666666667%;
  }

  .offset-lg-9 {
    margin-left: 75%;
  }

  .offset-lg-10 {
    margin-left: 83.3333333333%;
  }

  .offset-lg-11 {
    margin-left: 91.6666666667%;
  }

  .g-lg-0 {
    --bs-gutter-x: 0;
    --bs-gutter-y: 0;
  }

  .gx-lg-0 {
    --bs-gutter-x: 0;
  }

  .gy-lg-0 {
    --bs-gutter-y: 0;
  }

  .g-lg-1 {
    --bs-gutter-x: 5px;
    --bs-gutter-y: 5px;
  }

  .gx-lg-1 {
    --bs-gutter-x: 5px;
  }

  .gy-lg-1 {
    --bs-gutter-y: 5px;
  }

  .g-lg-2 {
    --bs-gutter-x: 10px;
    --bs-gutter-y: 10px;
  }

  .gx-lg-2 {
    --bs-gutter-x: 10px;
  }

  .gy-lg-2 {
    --bs-gutter-y: 10px;
  }

  .g-lg-3 {
    --bs-gutter-x: 15px;
    --bs-gutter-y: 15px;
  }

  .gx-lg-3 {
    --bs-gutter-x: 15px;
  }

  .gy-lg-3 {
    --bs-gutter-y: 15px;
  }

  .g-lg-4 {
    --bs-gutter-x: 20px;
    --bs-gutter-y: 20px;
  }

  .gx-lg-4 {
    --bs-gutter-x: 20px;
  }

  .gy-lg-4 {
    --bs-gutter-y: 20px;
  }

  .g-lg-5 {
    --bs-gutter-x: 25px;
    --bs-gutter-y: 25px;
  }

  .gx-lg-5 {
    --bs-gutter-x: 25px;
  }

  .gy-lg-5 {
    --bs-gutter-y: 25px;
  }

  .g-lg-6 {
    --bs-gutter-x: 30px;
    --bs-gutter-y: 30px;
  }

  .gx-lg-6 {
    --bs-gutter-x: 30px;
  }

  .gy-lg-6 {
    --bs-gutter-y: 30px;
  }

  .g-lg-7 {
    --bs-gutter-x: 35px;
    --bs-gutter-y: 35px;
  }

  .gx-lg-7 {
    --bs-gutter-x: 35px;
  }

  .gy-lg-7 {
    --bs-gutter-y: 35px;
  }

  .g-lg-8 {
    --bs-gutter-x: 40px;
    --bs-gutter-y: 40px;
  }

  .gx-lg-8 {
    --bs-gutter-x: 40px;
  }

  .gy-lg-8 {
    --bs-gutter-y: 40px;
  }

  .g-lg-9 {
    --bs-gutter-x: 45px;
    --bs-gutter-y: 45px;
  }

  .gx-lg-9 {
    --bs-gutter-x: 45px;
  }

  .gy-lg-9 {
    --bs-gutter-y: 45px;
  }

  .g-lg-10 {
    --bs-gutter-x: 50px;
    --bs-gutter-y: 50px;
  }

  .gx-lg-10 {
    --bs-gutter-x: 50px;
  }

  .gy-lg-10 {
    --bs-gutter-y: 50px;
  }

  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }

  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }

  .navbar-expand-lg {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 8px;
    padding-left: 8px;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }

  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 4px;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 4px;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }

  .modal-lg {
    max-width: 800px;
  }

  .modal-xl {
    max-width: 800px;
  }

  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }

  .float-lg-left {
    float: left;
  }

  .float-lg-right {
    float: right;
  }

  .float-lg-none {
    float: none;
  }

  .d-lg-inline {
    display: inline;
  }

  .d-lg-inline-block {
    display: inline-block;
  }

  .d-lg-block {
    display: block;
  }

  .d-lg-table {
    display: table;
  }

  .d-lg-table-row {
    display: table-row;
  }

  .d-lg-table-cell {
    display: table-cell;
  }

  .d-lg-flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .d-lg-inline-flex {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
  }

  .d-lg-none {
    display: none;
  }

  .flex-lg-fill {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
  }

  .flex-lg-row {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }

  .flex-lg-column {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }

  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
  }

  .flex-lg-column-reverse {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }

  .flex-lg-grow-0 {
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }

  .flex-lg-grow-1 {
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }

  .flex-lg-shrink-0 {
    -ms-flex-negative: 0;
        flex-shrink: 0;
  }

  .flex-lg-shrink-1 {
    -ms-flex-negative: 1;
        flex-shrink: 1;
  }

  .flex-lg-wrap {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }

  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
  }

  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse;
        flex-wrap: wrap-reverse;
  }

  .justify-content-lg-start {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }

  .justify-content-lg-end {
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }

  .justify-content-lg-center {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .justify-content-lg-between {
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }

  .justify-content-lg-around {
    -ms-flex-pack: distribute;
        justify-content: space-around;
  }

  .justify-content-lg-evenly {
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
  }

  .align-items-lg-start {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }

  .align-items-lg-end {
    -webkit-box-align: end;
        -ms-flex-align: end;
            align-items: flex-end;
  }

  .align-items-lg-center {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }

  .align-items-lg-baseline {
    -webkit-box-align: baseline;
        -ms-flex-align: baseline;
            align-items: baseline;
  }

  .align-items-lg-stretch {
    -webkit-box-align: stretch;
        -ms-flex-align: stretch;
            align-items: stretch;
  }

  .align-content-lg-start {
    -ms-flex-line-pack: start;
        align-content: flex-start;
  }

  .align-content-lg-end {
    -ms-flex-line-pack: end;
        align-content: flex-end;
  }

  .align-content-lg-center {
    -ms-flex-line-pack: center;
        align-content: center;
  }

  .align-content-lg-between {
    -ms-flex-line-pack: justify;
        align-content: space-between;
  }

  .align-content-lg-around {
    -ms-flex-line-pack: distribute;
        align-content: space-around;
  }

  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch;
        align-content: stretch;
  }

  .align-self-lg-auto {
    -ms-flex-item-align: auto;
        -ms-grid-row-align: auto;
        align-self: auto;
  }

  .align-self-lg-start {
    -ms-flex-item-align: start;
        align-self: flex-start;
  }

  .align-self-lg-end {
    -ms-flex-item-align: end;
        align-self: flex-end;
  }

  .align-self-lg-center {
    -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
  }

  .align-self-lg-baseline {
    -ms-flex-item-align: baseline;
        align-self: baseline;
  }

  .align-self-lg-stretch {
    -ms-flex-item-align: stretch;
        -ms-grid-row-align: stretch;
        align-self: stretch;
  }

  .order-lg-first {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }

  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }

  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .order-lg-last {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .m-lg-0 {
    margin: 0;
  }

  .m-lg-1 {
    margin: 5px;
  }

  .m-lg-2 {
    margin: 10px;
  }

  .m-lg-3 {
    margin: 15px;
  }

  .m-lg-4 {
    margin: 20px;
  }

  .m-lg-5 {
    margin: 25px;
  }

  .m-lg-6 {
    margin: 30px;
  }

  .m-lg-7 {
    margin: 35px;
  }

  .m-lg-8 {
    margin: 40px;
  }

  .m-lg-9 {
    margin: 45px;
  }

  .m-lg-10 {
    margin: 50px;
  }

  .m-lg-auto {
    margin: auto;
  }

  .mx-lg-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-lg-1 {
    margin-right: 5px;
    margin-left: 5px;
  }

  .mx-lg-2 {
    margin-right: 10px;
    margin-left: 10px;
  }

  .mx-lg-3 {
    margin-right: 15px;
    margin-left: 15px;
  }

  .mx-lg-4 {
    margin-right: 20px;
    margin-left: 20px;
  }

  .mx-lg-5 {
    margin-right: 25px;
    margin-left: 25px;
  }

  .mx-lg-6 {
    margin-right: 30px;
    margin-left: 30px;
  }

  .mx-lg-7 {
    margin-right: 35px;
    margin-left: 35px;
  }

  .mx-lg-8 {
    margin-right: 40px;
    margin-left: 40px;
  }

  .mx-lg-9 {
    margin-right: 45px;
    margin-left: 45px;
  }

  .mx-lg-10 {
    margin-right: 50px;
    margin-left: 50px;
  }

  .mx-lg-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-lg-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-lg-1 {
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .my-lg-2 {
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .my-lg-3 {
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .my-lg-4 {
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .my-lg-5 {
    margin-top: 25px;
    margin-bottom: 25px;
  }

  .my-lg-6 {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .my-lg-7 {
    margin-top: 35px;
    margin-bottom: 35px;
  }

  .my-lg-8 {
    margin-top: 40px;
    margin-bottom: 40px;
  }

  .my-lg-9 {
    margin-top: 45px;
    margin-bottom: 45px;
  }

  .my-lg-10 {
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .my-lg-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-lg-0 {
    margin-top: 0;
  }

  .mt-lg-1 {
    margin-top: 5px;
  }

  .mt-lg-2 {
    margin-top: 10px;
  }

  .mt-lg-3 {
    margin-top: 15px;
  }

  .mt-lg-4 {
    margin-top: 20px;
  }

  .mt-lg-5 {
    margin-top: 25px;
  }

  .mt-lg-6 {
    margin-top: 30px;
  }

  .mt-lg-7 {
    margin-top: 35px;
  }

  .mt-lg-8 {
    margin-top: 40px;
  }

  .mt-lg-9 {
    margin-top: 45px;
  }

  .mt-lg-10 {
    margin-top: 50px;
  }

  .mt-lg-auto {
    margin-top: auto;
  }

  .mr-lg-0 {
    margin-right: 0;
  }

  .mr-lg-1 {
    margin-right: 5px;
  }

  .mr-lg-2 {
    margin-right: 10px;
  }

  .mr-lg-3 {
    margin-right: 15px;
  }

  .mr-lg-4 {
    margin-right: 20px;
  }

  .mr-lg-5 {
    margin-right: 25px;
  }

  .mr-lg-6 {
    margin-right: 30px;
  }

  .mr-lg-7 {
    margin-right: 35px;
  }

  .mr-lg-8 {
    margin-right: 40px;
  }

  .mr-lg-9 {
    margin-right: 45px;
  }

  .mr-lg-10 {
    margin-right: 50px;
  }

  .mr-lg-auto {
    margin-right: auto;
  }

  .mb-lg-0 {
    margin-bottom: 0;
  }

  .mb-lg-1 {
    margin-bottom: 5px;
  }

  .mb-lg-2 {
    margin-bottom: 10px;
  }

  .mb-lg-3 {
    margin-bottom: 15px;
  }

  .mb-lg-4 {
    margin-bottom: 20px;
  }

  .mb-lg-5 {
    margin-bottom: 25px;
  }

  .mb-lg-6 {
    margin-bottom: 30px;
  }

  .mb-lg-7 {
    margin-bottom: 35px;
  }

  .mb-lg-8 {
    margin-bottom: 40px;
  }

  .mb-lg-9 {
    margin-bottom: 45px;
  }

  .mb-lg-10 {
    margin-bottom: 50px;
  }

  .mb-lg-auto {
    margin-bottom: auto;
  }

  .ml-lg-0 {
    margin-left: 0;
  }

  .ml-lg-1 {
    margin-left: 5px;
  }

  .ml-lg-2 {
    margin-left: 10px;
  }

  .ml-lg-3 {
    margin-left: 15px;
  }

  .ml-lg-4 {
    margin-left: 20px;
  }

  .ml-lg-5 {
    margin-left: 25px;
  }

  .ml-lg-6 {
    margin-left: 30px;
  }

  .ml-lg-7 {
    margin-left: 35px;
  }

  .ml-lg-8 {
    margin-left: 40px;
  }

  .ml-lg-9 {
    margin-left: 45px;
  }

  .ml-lg-10 {
    margin-left: 50px;
  }

  .ml-lg-auto {
    margin-left: auto;
  }

  .m-lg-n1 {
    margin: -5px;
  }

  .m-lg-n2 {
    margin: -10px;
  }

  .m-lg-n3 {
    margin: -15px;
  }

  .m-lg-n4 {
    margin: -20px;
  }

  .m-lg-n5 {
    margin: -25px;
  }

  .m-lg-n6 {
    margin: -30px;
  }

  .m-lg-n7 {
    margin: -35px;
  }

  .m-lg-n8 {
    margin: -40px;
  }

  .m-lg-n9 {
    margin: -45px;
  }

  .m-lg-n10 {
    margin: -50px;
  }

  .mx-lg-n1 {
    margin-right: -5px;
    margin-left: -5px;
  }

  .mx-lg-n2 {
    margin-right: -10px;
    margin-left: -10px;
  }

  .mx-lg-n3 {
    margin-right: -15px;
    margin-left: -15px;
  }

  .mx-lg-n4 {
    margin-right: -20px;
    margin-left: -20px;
  }

  .mx-lg-n5 {
    margin-right: -25px;
    margin-left: -25px;
  }

  .mx-lg-n6 {
    margin-right: -30px;
    margin-left: -30px;
  }

  .mx-lg-n7 {
    margin-right: -35px;
    margin-left: -35px;
  }

  .mx-lg-n8 {
    margin-right: -40px;
    margin-left: -40px;
  }

  .mx-lg-n9 {
    margin-right: -45px;
    margin-left: -45px;
  }

  .mx-lg-n10 {
    margin-right: -50px;
    margin-left: -50px;
  }

  .my-lg-n1 {
    margin-top: -5px;
    margin-bottom: -5px;
  }

  .my-lg-n2 {
    margin-top: -10px;
    margin-bottom: -10px;
  }

  .my-lg-n3 {
    margin-top: -15px;
    margin-bottom: -15px;
  }

  .my-lg-n4 {
    margin-top: -20px;
    margin-bottom: -20px;
  }

  .my-lg-n5 {
    margin-top: -25px;
    margin-bottom: -25px;
  }

  .my-lg-n6 {
    margin-top: -30px;
    margin-bottom: -30px;
  }

  .my-lg-n7 {
    margin-top: -35px;
    margin-bottom: -35px;
  }

  .my-lg-n8 {
    margin-top: -40px;
    margin-bottom: -40px;
  }

  .my-lg-n9 {
    margin-top: -45px;
    margin-bottom: -45px;
  }

  .my-lg-n10 {
    margin-top: -50px;
    margin-bottom: -50px;
  }

  .mt-lg-n1 {
    margin-top: -5px;
  }

  .mt-lg-n2 {
    margin-top: -10px;
  }

  .mt-lg-n3 {
    margin-top: -15px;
  }

  .mt-lg-n4 {
    margin-top: -20px;
  }

  .mt-lg-n5 {
    margin-top: -25px;
  }

  .mt-lg-n6 {
    margin-top: -30px;
  }

  .mt-lg-n7 {
    margin-top: -35px;
  }

  .mt-lg-n8 {
    margin-top: -40px;
  }

  .mt-lg-n9 {
    margin-top: -45px;
  }

  .mt-lg-n10 {
    margin-top: -50px;
  }

  .mr-lg-n1 {
    margin-right: -5px;
  }

  .mr-lg-n2 {
    margin-right: -10px;
  }

  .mr-lg-n3 {
    margin-right: -15px;
  }

  .mr-lg-n4 {
    margin-right: -20px;
  }

  .mr-lg-n5 {
    margin-right: -25px;
  }

  .mr-lg-n6 {
    margin-right: -30px;
  }

  .mr-lg-n7 {
    margin-right: -35px;
  }

  .mr-lg-n8 {
    margin-right: -40px;
  }

  .mr-lg-n9 {
    margin-right: -45px;
  }

  .mr-lg-n10 {
    margin-right: -50px;
  }

  .mb-lg-n1 {
    margin-bottom: -5px;
  }

  .mb-lg-n2 {
    margin-bottom: -10px;
  }

  .mb-lg-n3 {
    margin-bottom: -15px;
  }

  .mb-lg-n4 {
    margin-bottom: -20px;
  }

  .mb-lg-n5 {
    margin-bottom: -25px;
  }

  .mb-lg-n6 {
    margin-bottom: -30px;
  }

  .mb-lg-n7 {
    margin-bottom: -35px;
  }

  .mb-lg-n8 {
    margin-bottom: -40px;
  }

  .mb-lg-n9 {
    margin-bottom: -45px;
  }

  .mb-lg-n10 {
    margin-bottom: -50px;
  }

  .ml-lg-n1 {
    margin-left: -5px;
  }

  .ml-lg-n2 {
    margin-left: -10px;
  }

  .ml-lg-n3 {
    margin-left: -15px;
  }

  .ml-lg-n4 {
    margin-left: -20px;
  }

  .ml-lg-n5 {
    margin-left: -25px;
  }

  .ml-lg-n6 {
    margin-left: -30px;
  }

  .ml-lg-n7 {
    margin-left: -35px;
  }

  .ml-lg-n8 {
    margin-left: -40px;
  }

  .ml-lg-n9 {
    margin-left: -45px;
  }

  .ml-lg-n10 {
    margin-left: -50px;
  }

  .p-lg-0 {
    padding: 0;
  }

  .p-lg-1 {
    padding: 5px;
  }

  .p-lg-2 {
    padding: 10px;
  }

  .p-lg-3 {
    padding: 15px;
  }

  .p-lg-4 {
    padding: 20px;
  }

  .p-lg-5 {
    padding: 25px;
  }

  .p-lg-6 {
    padding: 30px;
  }

  .p-lg-7 {
    padding: 35px;
  }

  .p-lg-8 {
    padding: 40px;
  }

  .p-lg-9 {
    padding: 45px;
  }

  .p-lg-10 {
    padding: 50px;
  }

  .px-lg-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-lg-1 {
    padding-right: 5px;
    padding-left: 5px;
  }

  .px-lg-2 {
    padding-right: 10px;
    padding-left: 10px;
  }

  .px-lg-3 {
    padding-right: 15px;
    padding-left: 15px;
  }

  .px-lg-4 {
    padding-right: 20px;
    padding-left: 20px;
  }

  .px-lg-5 {
    padding-right: 25px;
    padding-left: 25px;
  }

  .px-lg-6 {
    padding-right: 30px;
    padding-left: 30px;
  }

  .px-lg-7 {
    padding-right: 35px;
    padding-left: 35px;
  }

  .px-lg-8 {
    padding-right: 40px;
    padding-left: 40px;
  }

  .px-lg-9 {
    padding-right: 45px;
    padding-left: 45px;
  }

  .px-lg-10 {
    padding-right: 50px;
    padding-left: 50px;
  }

  .py-lg-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-lg-1 {
    padding-top: 5px;
    padding-bottom: 5px;
  }

  .py-lg-2 {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .py-lg-3 {
    padding-top: 15px;
    padding-bottom: 15px;
  }

  .py-lg-4 {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .py-lg-5 {
    padding-top: 25px;
    padding-bottom: 25px;
  }

  .py-lg-6 {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .py-lg-7 {
    padding-top: 35px;
    padding-bottom: 35px;
  }

  .py-lg-8 {
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .py-lg-9 {
    padding-top: 45px;
    padding-bottom: 45px;
  }

  .py-lg-10 {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .pt-lg-0 {
    padding-top: 0;
  }

  .pt-lg-1 {
    padding-top: 5px;
  }

  .pt-lg-2 {
    padding-top: 10px;
  }

  .pt-lg-3 {
    padding-top: 15px;
  }

  .pt-lg-4 {
    padding-top: 20px;
  }

  .pt-lg-5 {
    padding-top: 25px;
  }

  .pt-lg-6 {
    padding-top: 30px;
  }

  .pt-lg-7 {
    padding-top: 35px;
  }

  .pt-lg-8 {
    padding-top: 40px;
  }

  .pt-lg-9 {
    padding-top: 45px;
  }

  .pt-lg-10 {
    padding-top: 50px;
  }

  .pr-lg-0 {
    padding-right: 0;
  }

  .pr-lg-1 {
    padding-right: 5px;
  }

  .pr-lg-2 {
    padding-right: 10px;
  }

  .pr-lg-3 {
    padding-right: 15px;
  }

  .pr-lg-4 {
    padding-right: 20px;
  }

  .pr-lg-5 {
    padding-right: 25px;
  }

  .pr-lg-6 {
    padding-right: 30px;
  }

  .pr-lg-7 {
    padding-right: 35px;
  }

  .pr-lg-8 {
    padding-right: 40px;
  }

  .pr-lg-9 {
    padding-right: 45px;
  }

  .pr-lg-10 {
    padding-right: 50px;
  }

  .pb-lg-0 {
    padding-bottom: 0;
  }

  .pb-lg-1 {
    padding-bottom: 5px;
  }

  .pb-lg-2 {
    padding-bottom: 10px;
  }

  .pb-lg-3 {
    padding-bottom: 15px;
  }

  .pb-lg-4 {
    padding-bottom: 20px;
  }

  .pb-lg-5 {
    padding-bottom: 25px;
  }

  .pb-lg-6 {
    padding-bottom: 30px;
  }

  .pb-lg-7 {
    padding-bottom: 35px;
  }

  .pb-lg-8 {
    padding-bottom: 40px;
  }

  .pb-lg-9 {
    padding-bottom: 45px;
  }

  .pb-lg-10 {
    padding-bottom: 50px;
  }

  .pl-lg-0 {
    padding-left: 0;
  }

  .pl-lg-1 {
    padding-left: 5px;
  }

  .pl-lg-2 {
    padding-left: 10px;
  }

  .pl-lg-3 {
    padding-left: 15px;
  }

  .pl-lg-4 {
    padding-left: 20px;
  }

  .pl-lg-5 {
    padding-left: 25px;
  }

  .pl-lg-6 {
    padding-left: 30px;
  }

  .pl-lg-7 {
    padding-left: 35px;
  }

  .pl-lg-8 {
    padding-left: 40px;
  }

  .pl-lg-9 {
    padding-left: 45px;
  }

  .pl-lg-10 {
    padding-left: 50px;
  }

  .text-lg-left {
    text-align: left;
  }

  .text-lg-right {
    text-align: right;
  }

  .text-lg-center {
    text-align: center;
  }
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.5rem;
  }

  .h1 {
    font-size: 2.5rem;
  }

  h2, .h2 {
    font-size: 2rem;
  }

  .h2 {
    font-size: 2rem;
  }

  h3, .h3 {
    font-size: 1.75rem;
  }

  .h3 {
    font-size: 1.75rem;
  }

  h4, .h4 {
    font-size: 1.5rem;
  }

  .h4 {
    font-size: 1.5rem;
  }

  legend {
    font-size: 1.5rem;
  }

  .display-1 {
    font-size: 5rem;
  }

  .display-2 {
    font-size: 4.5rem;
  }

  .display-3 {
    font-size: 4rem;
  }

  .display-4 {
    font-size: 3.5rem;
  }

  .display-5 {
    font-size: 3rem;
  }

  .display-6 {
    font-size: 2.5rem;
  }

  .container-xl {
    max-width: 1170px;
  }

  .container-lg {
    max-width: 1170px;
  }

  .container-md {
    max-width: 1170px;
  }

  .container-sm {
    max-width: 1170px;
  }

  .container {
    max-width: 1170px;
  }

  .col-xl {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
            flex: 1 0 0%;
  }

  .row-cols-xl-auto > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .row-cols-xl-1 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-xl-2 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-xl-3 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .row-cols-xl-4 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-xl-5 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-xl-6 > * {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-xl-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
  }

  .col-xl-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 8.3333333333%;
  }

  .col-xl-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 16.6666666667%;
  }

  .col-xl-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 25%;
  }

  .col-xl-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .col-xl-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 41.6666666667%;
  }

  .col-xl-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .col-xl-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 58.3333333333%;
  }

  .col-xl-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 66.6666666667%;
  }

  .col-xl-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 75%;
  }

  .col-xl-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 83.3333333333%;
  }

  .col-xl-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 91.6666666667%;
  }

  .col-xl-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
  }

  .offset-xl-0 {
    margin-left: 0;
  }

  .offset-xl-1 {
    margin-left: 8.3333333333%;
  }

  .offset-xl-2 {
    margin-left: 16.6666666667%;
  }

  .offset-xl-3 {
    margin-left: 25%;
  }

  .offset-xl-4 {
    margin-left: 33.3333333333%;
  }

  .offset-xl-5 {
    margin-left: 41.6666666667%;
  }

  .offset-xl-6 {
    margin-left: 50%;
  }

  .offset-xl-7 {
    margin-left: 58.3333333333%;
  }

  .offset-xl-8 {
    margin-left: 66.6666666667%;
  }

  .offset-xl-9 {
    margin-left: 75%;
  }

  .offset-xl-10 {
    margin-left: 83.3333333333%;
  }

  .offset-xl-11 {
    margin-left: 91.6666666667%;
  }

  .g-xl-0 {
    --bs-gutter-x: 0;
    --bs-gutter-y: 0;
  }

  .gx-xl-0 {
    --bs-gutter-x: 0;
  }

  .gy-xl-0 {
    --bs-gutter-y: 0;
  }

  .g-xl-1 {
    --bs-gutter-x: 5px;
    --bs-gutter-y: 5px;
  }

  .gx-xl-1 {
    --bs-gutter-x: 5px;
  }

  .gy-xl-1 {
    --bs-gutter-y: 5px;
  }

  .g-xl-2 {
    --bs-gutter-x: 10px;
    --bs-gutter-y: 10px;
  }

  .gx-xl-2 {
    --bs-gutter-x: 10px;
  }

  .gy-xl-2 {
    --bs-gutter-y: 10px;
  }

  .g-xl-3 {
    --bs-gutter-x: 15px;
    --bs-gutter-y: 15px;
  }

  .gx-xl-3 {
    --bs-gutter-x: 15px;
  }

  .gy-xl-3 {
    --bs-gutter-y: 15px;
  }

  .g-xl-4 {
    --bs-gutter-x: 20px;
    --bs-gutter-y: 20px;
  }

  .gx-xl-4 {
    --bs-gutter-x: 20px;
  }

  .gy-xl-4 {
    --bs-gutter-y: 20px;
  }

  .g-xl-5 {
    --bs-gutter-x: 25px;
    --bs-gutter-y: 25px;
  }

  .gx-xl-5 {
    --bs-gutter-x: 25px;
  }

  .gy-xl-5 {
    --bs-gutter-y: 25px;
  }

  .g-xl-6 {
    --bs-gutter-x: 30px;
    --bs-gutter-y: 30px;
  }

  .gx-xl-6 {
    --bs-gutter-x: 30px;
  }

  .gy-xl-6 {
    --bs-gutter-y: 30px;
  }

  .g-xl-7 {
    --bs-gutter-x: 35px;
    --bs-gutter-y: 35px;
  }

  .gx-xl-7 {
    --bs-gutter-x: 35px;
  }

  .gy-xl-7 {
    --bs-gutter-y: 35px;
  }

  .g-xl-8 {
    --bs-gutter-x: 40px;
    --bs-gutter-y: 40px;
  }

  .gx-xl-8 {
    --bs-gutter-x: 40px;
  }

  .gy-xl-8 {
    --bs-gutter-y: 40px;
  }

  .g-xl-9 {
    --bs-gutter-x: 45px;
    --bs-gutter-y: 45px;
  }

  .gx-xl-9 {
    --bs-gutter-x: 45px;
  }

  .gy-xl-9 {
    --bs-gutter-y: 45px;
  }

  .g-xl-10 {
    --bs-gutter-x: 50px;
    --bs-gutter-y: 50px;
  }

  .gx-xl-10 {
    --bs-gutter-x: 50px;
  }

  .gy-xl-10 {
    --bs-gutter-y: 50px;
  }

  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }

  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }

  .navbar-expand-xl {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 8px;
    padding-left: 8px;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }

  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 4px;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 4px;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }

  .modal-xl {
    max-width: 1140px;
  }

  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }

  .float-xl-left {
    float: left;
  }

  .float-xl-right {
    float: right;
  }

  .float-xl-none {
    float: none;
  }

  .d-xl-inline {
    display: inline;
  }

  .d-xl-inline-block {
    display: inline-block;
  }

  .d-xl-block {
    display: block;
  }

  .d-xl-table {
    display: table;
  }

  .d-xl-table-row {
    display: table-row;
  }

  .d-xl-table-cell {
    display: table-cell;
  }

  .d-xl-flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .d-xl-inline-flex {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
  }

  .d-xl-none {
    display: none;
  }

  .flex-xl-fill {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
            flex: 1 1 auto;
  }

  .flex-xl-row {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }

  .flex-xl-column {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }

  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
  }

  .flex-xl-column-reverse {
    -webkit-box-orient: vertical;
    -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }

  .flex-xl-grow-0 {
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }

  .flex-xl-grow-1 {
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
  }

  .flex-xl-shrink-0 {
    -ms-flex-negative: 0;
        flex-shrink: 0;
  }

  .flex-xl-shrink-1 {
    -ms-flex-negative: 1;
        flex-shrink: 1;
  }

  .flex-xl-wrap {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
  }

  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
  }

  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse;
        flex-wrap: wrap-reverse;
  }

  .justify-content-xl-start {
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
  }

  .justify-content-xl-end {
    -webkit-box-pack: end;
        -ms-flex-pack: end;
            justify-content: flex-end;
  }

  .justify-content-xl-center {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .justify-content-xl-between {
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }

  .justify-content-xl-around {
    -ms-flex-pack: distribute;
        justify-content: space-around;
  }

  .justify-content-xl-evenly {
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
  }

  .align-items-xl-start {
    -webkit-box-align: start;
        -ms-flex-align: start;
            align-items: flex-start;
  }

  .align-items-xl-end {
    -webkit-box-align: end;
        -ms-flex-align: end;
            align-items: flex-end;
  }

  .align-items-xl-center {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }

  .align-items-xl-baseline {
    -webkit-box-align: baseline;
        -ms-flex-align: baseline;
            align-items: baseline;
  }

  .align-items-xl-stretch {
    -webkit-box-align: stretch;
        -ms-flex-align: stretch;
            align-items: stretch;
  }

  .align-content-xl-start {
    -ms-flex-line-pack: start;
        align-content: flex-start;
  }

  .align-content-xl-end {
    -ms-flex-line-pack: end;
        align-content: flex-end;
  }

  .align-content-xl-center {
    -ms-flex-line-pack: center;
        align-content: center;
  }

  .align-content-xl-between {
    -ms-flex-line-pack: justify;
        align-content: space-between;
  }

  .align-content-xl-around {
    -ms-flex-line-pack: distribute;
        align-content: space-around;
  }

  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch;
        align-content: stretch;
  }

  .align-self-xl-auto {
    -ms-flex-item-align: auto;
        -ms-grid-row-align: auto;
        align-self: auto;
  }

  .align-self-xl-start {
    -ms-flex-item-align: start;
        align-self: flex-start;
  }

  .align-self-xl-end {
    -ms-flex-item-align: end;
        align-self: flex-end;
  }

  .align-self-xl-center {
    -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
  }

  .align-self-xl-baseline {
    -ms-flex-item-align: baseline;
        align-self: baseline;
  }

  .align-self-xl-stretch {
    -ms-flex-item-align: stretch;
        -ms-grid-row-align: stretch;
        align-self: stretch;
  }

  .order-xl-first {
    -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
            order: -1;
  }

  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
            order: 0;
  }

  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
            order: 1;
  }

  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
            order: 2;
  }

  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
            order: 3;
  }

  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
  }

  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
            order: 5;
  }

  .order-xl-last {
    -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
            order: 6;
  }

  .m-xl-0 {
    margin: 0;
  }

  .m-xl-1 {
    margin: 5px;
  }

  .m-xl-2 {
    margin: 10px;
  }

  .m-xl-3 {
    margin: 15px;
  }

  .m-xl-4 {
    margin: 20px;
  }

  .m-xl-5 {
    margin: 25px;
  }

  .m-xl-6 {
    margin: 30px;
  }

  .m-xl-7 {
    margin: 35px;
  }

  .m-xl-8 {
    margin: 40px;
  }

  .m-xl-9 {
    margin: 45px;
  }

  .m-xl-10 {
    margin: 50px;
  }

  .m-xl-auto {
    margin: auto;
  }

  .mx-xl-0 {
    margin-right: 0;
    margin-left: 0;
  }

  .mx-xl-1 {
    margin-right: 5px;
    margin-left: 5px;
  }

  .mx-xl-2 {
    margin-right: 10px;
    margin-left: 10px;
  }

  .mx-xl-3 {
    margin-right: 15px;
    margin-left: 15px;
  }

  .mx-xl-4 {
    margin-right: 20px;
    margin-left: 20px;
  }

  .mx-xl-5 {
    margin-right: 25px;
    margin-left: 25px;
  }

  .mx-xl-6 {
    margin-right: 30px;
    margin-left: 30px;
  }

  .mx-xl-7 {
    margin-right: 35px;
    margin-left: 35px;
  }

  .mx-xl-8 {
    margin-right: 40px;
    margin-left: 40px;
  }

  .mx-xl-9 {
    margin-right: 45px;
    margin-left: 45px;
  }

  .mx-xl-10 {
    margin-right: 50px;
    margin-left: 50px;
  }

  .mx-xl-auto {
    margin-right: auto;
    margin-left: auto;
  }

  .my-xl-0 {
    margin-top: 0;
    margin-bottom: 0;
  }

  .my-xl-1 {
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .my-xl-2 {
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .my-xl-3 {
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .my-xl-4 {
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .my-xl-5 {
    margin-top: 25px;
    margin-bottom: 25px;
  }

  .my-xl-6 {
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .my-xl-7 {
    margin-top: 35px;
    margin-bottom: 35px;
  }

  .my-xl-8 {
    margin-top: 40px;
    margin-bottom: 40px;
  }

  .my-xl-9 {
    margin-top: 45px;
    margin-bottom: 45px;
  }

  .my-xl-10 {
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .my-xl-auto {
    margin-top: auto;
    margin-bottom: auto;
  }

  .mt-xl-0 {
    margin-top: 0;
  }

  .mt-xl-1 {
    margin-top: 5px;
  }

  .mt-xl-2 {
    margin-top: 10px;
  }

  .mt-xl-3 {
    margin-top: 15px;
  }

  .mt-xl-4 {
    margin-top: 20px;
  }

  .mt-xl-5 {
    margin-top: 25px;
  }

  .mt-xl-6 {
    margin-top: 30px;
  }

  .mt-xl-7 {
    margin-top: 35px;
  }

  .mt-xl-8 {
    margin-top: 40px;
  }

  .mt-xl-9 {
    margin-top: 45px;
  }

  .mt-xl-10 {
    margin-top: 50px;
  }

  .mt-xl-auto {
    margin-top: auto;
  }

  .mr-xl-0 {
    margin-right: 0;
  }

  .mr-xl-1 {
    margin-right: 5px;
  }

  .mr-xl-2 {
    margin-right: 10px;
  }

  .mr-xl-3 {
    margin-right: 15px;
  }

  .mr-xl-4 {
    margin-right: 20px;
  }

  .mr-xl-5 {
    margin-right: 25px;
  }

  .mr-xl-6 {
    margin-right: 30px;
  }

  .mr-xl-7 {
    margin-right: 35px;
  }

  .mr-xl-8 {
    margin-right: 40px;
  }

  .mr-xl-9 {
    margin-right: 45px;
  }

  .mr-xl-10 {
    margin-right: 50px;
  }

  .mr-xl-auto {
    margin-right: auto;
  }

  .mb-xl-0 {
    margin-bottom: 0;
  }

  .mb-xl-1 {
    margin-bottom: 5px;
  }

  .mb-xl-2 {
    margin-bottom: 10px;
  }

  .mb-xl-3 {
    margin-bottom: 15px;
  }

  .mb-xl-4 {
    margin-bottom: 20px;
  }

  .mb-xl-5 {
    margin-bottom: 25px;
  }

  .mb-xl-6 {
    margin-bottom: 30px;
  }

  .mb-xl-7 {
    margin-bottom: 35px;
  }

  .mb-xl-8 {
    margin-bottom: 40px;
  }

  .mb-xl-9 {
    margin-bottom: 45px;
  }

  .mb-xl-10 {
    margin-bottom: 50px;
  }

  .mb-xl-auto {
    margin-bottom: auto;
  }

  .ml-xl-0 {
    margin-left: 0;
  }

  .ml-xl-1 {
    margin-left: 5px;
  }

  .ml-xl-2 {
    margin-left: 10px;
  }

  .ml-xl-3 {
    margin-left: 15px;
  }

  .ml-xl-4 {
    margin-left: 20px;
  }

  .ml-xl-5 {
    margin-left: 25px;
  }

  .ml-xl-6 {
    margin-left: 30px;
  }

  .ml-xl-7 {
    margin-left: 35px;
  }

  .ml-xl-8 {
    margin-left: 40px;
  }

  .ml-xl-9 {
    margin-left: 45px;
  }

  .ml-xl-10 {
    margin-left: 50px;
  }

  .ml-xl-auto {
    margin-left: auto;
  }

  .m-xl-n1 {
    margin: -5px;
  }

  .m-xl-n2 {
    margin: -10px;
  }

  .m-xl-n3 {
    margin: -15px;
  }

  .m-xl-n4 {
    margin: -20px;
  }

  .m-xl-n5 {
    margin: -25px;
  }

  .m-xl-n6 {
    margin: -30px;
  }

  .m-xl-n7 {
    margin: -35px;
  }

  .m-xl-n8 {
    margin: -40px;
  }

  .m-xl-n9 {
    margin: -45px;
  }

  .m-xl-n10 {
    margin: -50px;
  }

  .mx-xl-n1 {
    margin-right: -5px;
    margin-left: -5px;
  }

  .mx-xl-n2 {
    margin-right: -10px;
    margin-left: -10px;
  }

  .mx-xl-n3 {
    margin-right: -15px;
    margin-left: -15px;
  }

  .mx-xl-n4 {
    margin-right: -20px;
    margin-left: -20px;
  }

  .mx-xl-n5 {
    margin-right: -25px;
    margin-left: -25px;
  }

  .mx-xl-n6 {
    margin-right: -30px;
    margin-left: -30px;
  }

  .mx-xl-n7 {
    margin-right: -35px;
    margin-left: -35px;
  }

  .mx-xl-n8 {
    margin-right: -40px;
    margin-left: -40px;
  }

  .mx-xl-n9 {
    margin-right: -45px;
    margin-left: -45px;
  }

  .mx-xl-n10 {
    margin-right: -50px;
    margin-left: -50px;
  }

  .my-xl-n1 {
    margin-top: -5px;
    margin-bottom: -5px;
  }

  .my-xl-n2 {
    margin-top: -10px;
    margin-bottom: -10px;
  }

  .my-xl-n3 {
    margin-top: -15px;
    margin-bottom: -15px;
  }

  .my-xl-n4 {
    margin-top: -20px;
    margin-bottom: -20px;
  }

  .my-xl-n5 {
    margin-top: -25px;
    margin-bottom: -25px;
  }

  .my-xl-n6 {
    margin-top: -30px;
    margin-bottom: -30px;
  }

  .my-xl-n7 {
    margin-top: -35px;
    margin-bottom: -35px;
  }

  .my-xl-n8 {
    margin-top: -40px;
    margin-bottom: -40px;
  }

  .my-xl-n9 {
    margin-top: -45px;
    margin-bottom: -45px;
  }

  .my-xl-n10 {
    margin-top: -50px;
    margin-bottom: -50px;
  }

  .mt-xl-n1 {
    margin-top: -5px;
  }

  .mt-xl-n2 {
    margin-top: -10px;
  }

  .mt-xl-n3 {
    margin-top: -15px;
  }

  .mt-xl-n4 {
    margin-top: -20px;
  }

  .mt-xl-n5 {
    margin-top: -25px;
  }

  .mt-xl-n6 {
    margin-top: -30px;
  }

  .mt-xl-n7 {
    margin-top: -35px;
  }

  .mt-xl-n8 {
    margin-top: -40px;
  }

  .mt-xl-n9 {
    margin-top: -45px;
  }

  .mt-xl-n10 {
    margin-top: -50px;
  }

  .mr-xl-n1 {
    margin-right: -5px;
  }

  .mr-xl-n2 {
    margin-right: -10px;
  }

  .mr-xl-n3 {
    margin-right: -15px;
  }

  .mr-xl-n4 {
    margin-right: -20px;
  }

  .mr-xl-n5 {
    margin-right: -25px;
  }

  .mr-xl-n6 {
    margin-right: -30px;
  }

  .mr-xl-n7 {
    margin-right: -35px;
  }

  .mr-xl-n8 {
    margin-right: -40px;
  }

  .mr-xl-n9 {
    margin-right: -45px;
  }

  .mr-xl-n10 {
    margin-right: -50px;
  }

  .mb-xl-n1 {
    margin-bottom: -5px;
  }

  .mb-xl-n2 {
    margin-bottom: -10px;
  }

  .mb-xl-n3 {
    margin-bottom: -15px;
  }

  .mb-xl-n4 {
    margin-bottom: -20px;
  }

  .mb-xl-n5 {
    margin-bottom: -25px;
  }

  .mb-xl-n6 {
    margin-bottom: -30px;
  }

  .mb-xl-n7 {
    margin-bottom: -35px;
  }

  .mb-xl-n8 {
    margin-bottom: -40px;
  }

  .mb-xl-n9 {
    margin-bottom: -45px;
  }

  .mb-xl-n10 {
    margin-bottom: -50px;
  }

  .ml-xl-n1 {
    margin-left: -5px;
  }

  .ml-xl-n2 {
    margin-left: -10px;
  }

  .ml-xl-n3 {
    margin-left: -15px;
  }

  .ml-xl-n4 {
    margin-left: -20px;
  }

  .ml-xl-n5 {
    margin-left: -25px;
  }

  .ml-xl-n6 {
    margin-left: -30px;
  }

  .ml-xl-n7 {
    margin-left: -35px;
  }

  .ml-xl-n8 {
    margin-left: -40px;
  }

  .ml-xl-n9 {
    margin-left: -45px;
  }

  .ml-xl-n10 {
    margin-left: -50px;
  }

  .p-xl-0 {
    padding: 0;
  }

  .p-xl-1 {
    padding: 5px;
  }

  .p-xl-2 {
    padding: 10px;
  }

  .p-xl-3 {
    padding: 15px;
  }

  .p-xl-4 {
    padding: 20px;
  }

  .p-xl-5 {
    padding: 25px;
  }

  .p-xl-6 {
    padding: 30px;
  }

  .p-xl-7 {
    padding: 35px;
  }

  .p-xl-8 {
    padding: 40px;
  }

  .p-xl-9 {
    padding: 45px;
  }

  .p-xl-10 {
    padding: 50px;
  }

  .px-xl-0 {
    padding-right: 0;
    padding-left: 0;
  }

  .px-xl-1 {
    padding-right: 5px;
    padding-left: 5px;
  }

  .px-xl-2 {
    padding-right: 10px;
    padding-left: 10px;
  }

  .px-xl-3 {
    padding-right: 15px;
    padding-left: 15px;
  }

  .px-xl-4 {
    padding-right: 20px;
    padding-left: 20px;
  }

  .px-xl-5 {
    padding-right: 25px;
    padding-left: 25px;
  }

  .px-xl-6 {
    padding-right: 30px;
    padding-left: 30px;
  }

  .px-xl-7 {
    padding-right: 35px;
    padding-left: 35px;
  }

  .px-xl-8 {
    padding-right: 40px;
    padding-left: 40px;
  }

  .px-xl-9 {
    padding-right: 45px;
    padding-left: 45px;
  }

  .px-xl-10 {
    padding-right: 50px;
    padding-left: 50px;
  }

  .py-xl-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-xl-1 {
    padding-top: 5px;
    padding-bottom: 5px;
  }

  .py-xl-2 {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .py-xl-3 {
    padding-top: 15px;
    padding-bottom: 15px;
  }

  .py-xl-4 {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .py-xl-5 {
    padding-top: 25px;
    padding-bottom: 25px;
  }

  .py-xl-6 {
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .py-xl-7 {
    padding-top: 35px;
    padding-bottom: 35px;
  }

  .py-xl-8 {
    padding-top: 40px;
    padding-bottom: 40px;
  }

  .py-xl-9 {
    padding-top: 45px;
    padding-bottom: 45px;
  }

  .py-xl-10 {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .pt-xl-0 {
    padding-top: 0;
  }

  .pt-xl-1 {
    padding-top: 5px;
  }

  .pt-xl-2 {
    padding-top: 10px;
  }

  .pt-xl-3 {
    padding-top: 15px;
  }

  .pt-xl-4 {
    padding-top: 20px;
  }

  .pt-xl-5 {
    padding-top: 25px;
  }

  .pt-xl-6 {
    padding-top: 30px;
  }

  .pt-xl-7 {
    padding-top: 35px;
  }

  .pt-xl-8 {
    padding-top: 40px;
  }

  .pt-xl-9 {
    padding-top: 45px;
  }

  .pt-xl-10 {
    padding-top: 50px;
  }

  .pr-xl-0 {
    padding-right: 0;
  }

  .pr-xl-1 {
    padding-right: 5px;
  }

  .pr-xl-2 {
    padding-right: 10px;
  }

  .pr-xl-3 {
    padding-right: 15px;
  }

  .pr-xl-4 {
    padding-right: 20px;
  }

  .pr-xl-5 {
    padding-right: 25px;
  }

  .pr-xl-6 {
    padding-right: 30px;
  }

  .pr-xl-7 {
    padding-right: 35px;
  }

  .pr-xl-8 {
    padding-right: 40px;
  }

  .pr-xl-9 {
    padding-right: 45px;
  }

  .pr-xl-10 {
    padding-right: 50px;
  }

  .pb-xl-0 {
    padding-bottom: 0;
  }

  .pb-xl-1 {
    padding-bottom: 5px;
  }

  .pb-xl-2 {
    padding-bottom: 10px;
  }

  .pb-xl-3 {
    padding-bottom: 15px;
  }

  .pb-xl-4 {
    padding-bottom: 20px;
  }

  .pb-xl-5 {
    padding-bottom: 25px;
  }

  .pb-xl-6 {
    padding-bottom: 30px;
  }

  .pb-xl-7 {
    padding-bottom: 35px;
  }

  .pb-xl-8 {
    padding-bottom: 40px;
  }

  .pb-xl-9 {
    padding-bottom: 45px;
  }

  .pb-xl-10 {
    padding-bottom: 50px;
  }

  .pl-xl-0 {
    padding-left: 0;
  }

  .pl-xl-1 {
    padding-left: 5px;
  }

  .pl-xl-2 {
    padding-left: 10px;
  }

  .pl-xl-3 {
    padding-left: 15px;
  }

  .pl-xl-4 {
    padding-left: 20px;
  }

  .pl-xl-5 {
    padding-left: 25px;
  }

  .pl-xl-6 {
    padding-left: 30px;
  }

  .pl-xl-7 {
    padding-left: 35px;
  }

  .pl-xl-8 {
    padding-left: 40px;
  }

  .pl-xl-9 {
    padding-left: 45px;
  }

  .pl-xl-10 {
    padding-left: 50px;
  }

  .text-xl-left {
    text-align: left;
  }

  .text-xl-right {
    text-align: right;
  }

  .text-xl-center {
    text-align: center;
  }
}
@media (min-width: 1450px) {
  .container-xl {
    max-width: 1400px;
  }

  .container-lg {
    max-width: 1400px;
  }

  .container-md {
    max-width: 1400px;
  }

  .container-sm {
    max-width: 1400px;
  }

  .container {
    max-width: 1400px;
  }
}
@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    -webkit-transition: none;
    transition: none;
  }

  .form-check-input {
    -webkit-transition: none;
    transition: none;
  }

  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
  .form-range::-ms-thumb {
    -ms-transition: none;
    transition: none;
  }

  .btn {
    -webkit-transition: none;
    transition: none;
  }

  .fade {
    -webkit-transition: none;
    transition: none;
  }

  .collapsing {
    -webkit-transition: none;
    transition: none;
  }

  .nav-link {
    -webkit-transition: none;
    transition: none;
  }

  .navbar-toggler {
    -webkit-transition: none;
    transition: none;
  }

  .page-link {
    -webkit-transition: none;
    transition: none;
  }

  .progress-bar {
    -webkit-transition: none;
    transition: none;
  }

  .progress-bar-animated {
    -webkit-animation: none;
            animation: none;
  }

  .modal.fade .modal-dialog {
    -webkit-transition: none;
    transition: none;
  }

  .carousel-item {
    -webkit-transition: none;
    transition: none;
  }

  .carousel-fade .active.carousel-item-left {
    -webkit-transition: none;
    transition: none;
  }
  .carousel-fade .active.carousel-item-right {
    -webkit-transition: none;
    transition: none;
  }

  .carousel-control-prev {
    -webkit-transition: none;
    transition: none;
  }

  .carousel-control-next {
    -webkit-transition: none;
    transition: none;
  }

  .carousel-indicators li {
    -webkit-transition: none;
    transition: none;
  }
}
@media print {
  .d-print-inline {
    display: inline;
  }

  .d-print-inline-block {
    display: inline-block;
  }

  .d-print-block {
    display: block;
  }

  .d-print-table {
    display: table;
  }

  .d-print-table-row {
    display: table-row;
  }

  .d-print-table-cell {
    display: table-cell;
  }

  .d-print-flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .d-print-inline-flex {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
  }

  .d-print-none {
    display: none;
  }
}
.btn {
  padding: 0;
  font-size: 14px;
  border-radius: 0;
  height: 45px;
  border: 0;
  font-weight: 500;
  line-height: 45px;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  padding-left: 15px;
  padding-right: 15px;
  text-transform: uppercase;
}
.btn:focus {
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-primary {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
  border: 0;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.btn-primary:hover {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}
.btn-primary:focus {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-primary:active {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}

.btn-color-dark {
  background-color: #4d4d4d;
  border-color: #4d4d4d;
  color: #ffffff;
  font-weight: 500;
  font-size: 14px;
  width: 130px;
  height: 45px;
  line-height: 45px;
}

.btn-hover-color-primary:hover {
  color: #ffffff;
  background-color: #555;
  border-color: #555;
}

.btn-check:focus + .btn {
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn-check:focus + .btn-primary {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-check:checked + .btn-primary {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}
.btn-check:active + .btn-primary {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}

.btn-primary.active {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}

.show > .btn-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #3474d4;
  border-color: #3474d4;
}

/*---------------------------------------------------------------------------------
    Click To Call CSS
-----------------------------------------------------------------------------------*/
.ec-cc-style {
  display: inline-block;
  position: fixed;
  letter-spacing: 0.1px;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  z-index: 16;
}
.ec-cc-style .cc-panel {
  display: none;
  margin-bottom: 5%;
  width: 300px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 3px 7px rgba(12, 12, 12, 0.18);
          box-shadow: 0px 3px 7px rgba(12, 12, 12, 0.18);
}
.ec-cc-style .cc-panel .cc-header {
  padding: 15px 10px;
  border-radius: 8px;
  text-align: center;
}
.ec-cc-style .cc-panel .cc-body {
  padding: 15px 10px 0;
  text-align: center;
}
.ec-cc-style .cc-panel .cc-footer {
  padding: 25px 10px 30px;
  text-align: center;
}
.ec-cc-style .cc-header img {
  padding: 5px;
  width: 30%;
  border: 2px solid #fff;
  border-radius: 100%;
}
.ec-cc-style .cc-header h2, .ec-cc-style .cc-header .h2 {
  padding-top: 5px;
  margin-bottom: 0;
  font-size: 18px;
  font-weight: 700;
  line-height: 30px;
  color: #fff;
}
.ec-cc-style .cc-header p {
  margin-bottom: 0;
  font-size: 13px;
}
.ec-cc-style .cc-body p {
  margin-bottom: 0;
  font-size: 14px;
}
.ec-cc-style .cc-footer a {
  text-decoration: none;
  color: inherit;
}
.ec-cc-style .cc-footer .cc-call-button {
  position: relative;
  margin: auto;
  padding: 12px 20px;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.ec-cc-style .cc-footer .cc-call-button:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 40px;
  height: 40px;
  display: block;
  border-radius: 28px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.ec-cc-style .cc-footer .cc-call-button span {
  position: relative;
  font-size: 13px;
  line-height: 18px;
  font-weight: 900;
  letter-spacing: 0.25em;
  text-transform: uppercase;
  vertical-align: middle;
}
.ec-cc-style .cc-footer .cc-call-button svg {
  position: relative;
  top: 0;
  margin-left: 10px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #777777;
  stroke-width: 2;
  -webkit-transform: translateX(-5px);
          transform: translateX(-5px);
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.ec-cc-style .cc-footer .cc-call-button:hover:before {
  width: 100%;
}
.ec-cc-style .cc-footer .cc-call-button:hover svg {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.ec-cc-style .cc-footer .cc-call-button:active {
  -webkit-transform: scale(0.96);
          transform: scale(0.96);
}
.ec-cc-style .cc-button {
  width: 40px;
  height: 40px;
  -webkit-box-shadow: 0 0 10px rgba(12, 12, 12, 0.3);
          box-shadow: 0 0 10px rgba(12, 12, 12, 0.3);
}
.ec-cc-style .cc-button:hover {
  background-color: #555;
  -webkit-box-shadow: 0px 0px 10px rgba(12, 12, 12, 0.5);
          box-shadow: 0px 0px 10px rgba(12, 12, 12, 0.5);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.ec-cc-style .cc-button i {
  display: table;
  height: 100%;
  width: 100%;
  margin-right: 0px;
  font-size: 25px;
  text-align: center;
  line-height: 50px;
  cursor: pointer;
}

.cc-right-bottom {
  bottom: 15px;
  right: 15px;
  float: right;
  cursor: pointer;
  z-index: 15;
}
.cc-right-bottom .cc-call-svg {
  fill: #fff;
  width: 100%;
  padding: 9px;
}

.ec-cc-style .cc-panel {
  background-color: #fff;
}
.ec-cc-style .cc-panel .cc-header {
  background-color: #00969b;
  color: #fff;
}
.ec-cc-style .cc-footer .cc-call-button svg {
  stroke: #444444;
}
.ec-cc-style .cc-footer .cc-call-button:before {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-color: #00969b;
}
.ec-cc-style .cc-footer .cc-call-button:hover:before {
  background-color: #555;
}
.ec-cc-style .cc-footer .cc-call-button:hover span {
  color: #fff;
}
.ec-cc-style .cc-footer .cc-call-button:hover svg {
  stroke: #fff;
}
.ec-cc-style .cc-footer .cc-call-button span {
  color: #444444;
}
.ec-cc-style .cc-button {
  background-color: #00969b;
}
.ec-cc-style .cc-button i {
  color: #fff;
}
.ec-cc-style .cc-body p {
  color: #777;
}

/*-------------------------------------------------
  Site Header Section CSS
---------------------------------------------------*/
.ec-header {
  background: #ffffff;
}

/*----  Fixed Header  ----*/
.sticky-nav.menu_fixed {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 16;
  -webkit-box-shadow: 0px 0px 8px rgba(51, 51, 51, 0.2);
          box-shadow: 0px 0px 8px rgba(51, 51, 51, 0.2);
  background: #ffffff;
  -webkit-animation: smoothScroll 1s forwards;
          animation: smoothScroll 1s forwards;
}

@-webkit-keyframes smoothScroll {
  0% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  100% {
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
}

@keyframes smoothScroll {
  0% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  100% {
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
}
/*----  Social Style  ----*/
.header-top {
  padding: 10px;
  border-bottom: 1px solid #eeeeee;
}

.header-top-social ul {
  display: initial;
}
.header-top-social ul li a {
  width: 25px;
  height: 25px;
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-radius: 100%;
  color: #ffffff;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 15px;
  background: #f7f7f7;
  border: 1px solid #eeeeee;
  color: #777;
}
.header-top-social ul li a:hover {
  color: #fff;
  border: 0;
}
.header-top-social ul li .hdr-facebook:hover {
  background: #3b5998;
}
.header-top-social ul li .hdr-twitter:hover {
  background: #1da1f2;
}
.header-top-social ul li .hdr-instagram:hover {
  background: #e44a73;
}
.header-top-social ul li .hdr-linkedin:hover {
  background: #0073b2;
}
.header-top-social ul li.list-inline-item:not(:last-child) {
  margin-right: 4px;
}

.social-text {
  padding-right: 3px;
  font-size: 13px;
  display: none;
}

/*----  Nav Offer Style  ----*/
.header-top-message {
  font-size: 13px;
  color: #777;
}
.header-top-message span {
  color: #222;
  padding-right: 5px;
}

/*----  Language & Currency  ----*/
.header-top-lan-curr {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.header-top-lan-curr .dropdown .dropdown-toggle {
  font-size: 13px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 0 18px;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  color: #777;
  border: none;
  padding-right: 0;
  letter-spacing: 0.5px;
}
.header-top-lan-curr .dropdown .dropdown-toggle i {
  font-size: 18px;
  margin-left: 7px;
  color: #777;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  margin-bottom: 1px;
}
.header-top-lan-curr .dropdown .dropdown-toggle::after {
  display: none;
}
.header-top-lan-curr .dropdown .dropdown-toggle:hover {
  color: #222;
}
.header-top-lan-curr .dropdown .dropdown-toggle:hover i {
  color: #222;
}
.header-top-lan-curr .dropdown .dropdown-menu {
  margin: 0;
  top: 34px !important;
  left: auto !important;
  right: 0 !important;
  min-width: 130px;
  overflow: hidden;
  padding: 0 10px;
  background: #ffffff;
  border-radius: 0;
  border: 1px solid #d9d9d9;
  -webkit-box-shadow: 0 3px 25px 4px rgba(0, 0, 0, 0.06);
          box-shadow: 0 3px 25px 4px rgba(0, 0, 0, 0.06);
  -webkit-transform: translate3d(0, 0, 0) !important;
          transform: translate3d(0, 0, 0) !important;
  border-radius: 30px;
}
.header-top-lan-curr .dropdown .dropdown-menu li {
  border-bottom: 1px solid #ebebeb;
}
.header-top-lan-curr .dropdown .dropdown-menu li:last-child {
  border: none;
}
.header-top-lan-curr .dropdown .dropdown-menu .dropdown-item {
  padding: 7px;
  color: #777;
  font-size: 13px;
  font-weight: 300;
  background: transparent;
  text-transform: uppercase;
}
.header-top-lan-curr .dropdown .dropdown-menu .dropdown-item:hover {
  color: #222;
}
.header-top-lan-curr .dropdown .dropdown-menu li.active .dropdown-item {
  color: #222;
}

.ec-header-bottom {
  background-color: transparent;
  padding: 25px 0;
  border-bottom: 1px solid #eeeeee;
}

.ec-flex {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

/*----  Site Logo  ----*/
.header-logo {
  text-align: left;
}
.header-logo img {
  width: 130px;
}

/*----  Header Button Actions  ----*/
.header_svg {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 36px;
  height: 36px;
  fill: #444444;
}

.ec-header-wishlist .header_svg {
  width: 33px;
  height: 33px;
}

.ec-header-bottons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}
.ec-header-bottons > * + * {
  padding-right: 9px;
  margin-left: 27px;
}
.ec-header-bottons .ec-header-btn {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  text-decoration: none;
  color: #444444;
  width: auto;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding-bottom: 6px;
}
.ec-header-bottons .ec-header-btn:hover {
  color: #222;
}
.ec-header-bottons .ec-header-btn:hover .ec-header-count {
  color: #ffffff;
  background-color: #222;
}
.ec-header-bottons .ec-header-btn:hover .header_svg {
  fill: #139487;
}
.ec-header-bottons .ec-header-btn:hover .cart-amount {
  color: #222;
}
.ec-header-bottons .ec-header-btn i {
  font-size: 24px;
  line-height: 1;
}
.ec-header-bottons .ec-header-btn .ec-header-count {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  font-size: 12px;
  font-weight: 600;
  line-height: 20px;
  position: absolute;
  z-index: 2;
  top: auto;
  right: 0;
  height: 20px;
  min-width: 20px;
  text-align: center;
  color: #ffffff;
  border-radius: 10px;
  background-color: #777777;
  bottom: 0;
  padding: 0 4px;
}
.ec-header-bottons .ec-header-btn .cart-amount {
  display: block;
  font-size: 16px;
  font-weight: 700;
  text-align: center;
  padding-left: 15px;
  color: #0f0f0f;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.ec-header-bottons .ec-header-btn.ec-header-wishlist {
  padding-bottom: 0;
  padding-right: 8px;
  margin-left: 34px;
}
.ec-header-bottons .ec-header-btn.ec-header-wishlist .header-icon {
  margin-top: 3px;
}
.ec-header-bottons .ec-header-btn.dropdown-toggle::after {
  display: none;
}
.ec-header-bottons .ec-header-user:hover .header_svg {
  fill: #139487;
}

.ec-header-user .dropdown-toggle {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  border: none;
  background-color: transparent;
  padding: 0;
}
.ec-header-user .dropdown-toggle::after {
  display: none;
}
.ec-header-user .dropdown-menu {
  margin: 0;
  top: 50px !important;
  left: auto !important;
  right: 0 !important;
  min-width: 130px;
  overflow: hidden;
  padding: 0 10px;
  background: #ffffff;
  border-radius: 0;
  -webkit-box-shadow: 0 3px 25px 4px rgba(0, 0, 0, 0.06);
          box-shadow: 0 3px 25px 4px rgba(0, 0, 0, 0.06);
  -webkit-transform: translate3d(0, 0, 0) !important;
          transform: translate3d(0, 0, 0) !important;
  border: 1px solid #d9d9d9;
}
.ec-header-user .dropdown-menu li {
  border-bottom: 1px solid #ebebeb;
}
.ec-header-user .dropdown-menu li:last-child {
  border: none;
}
.ec-header-user .dropdown-menu .dropdown-item {
  padding: 7px;
  color: #777;
  font-size: 13px;
  font-weight: 300;
  background: transparent;
  text-transform: uppercase;
}
.ec-header-user .dropdown-menu .dropdown-item:hover {
  color: #222;
}

/*----  Main Menu  ----*/
.ec-main-menu {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.ec-main-menu ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
  width: 100%;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: relative;
}
.ec-main-menu ul li {
  margin-left: 20px;
  margin-right: 20px;
}
.ec-main-menu ul li a {
  font-size: 14px;
  line-height: 50px;
  font-weight: 600;
  text-decoration: none;
  letter-spacing: 0;
  text-transform: uppercase;
  color: #444444;
  display: block;
  position: relative;
  font-family: "Poppins, sans-serif";
}
.ec-main-menu ul li .main-label-note-new {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 10px;
  height: 10px;
  margin: auto;
  background-color: #ec716d;
  border-radius: 50%;
  cursor: default;
  display: block;
  position: absolute;
  bottom: 6px;
  left: 0;
  right: 0;
  z-index: 3;
  -webkit-animation: blink-lbl-back 2.3s infinite;
          animation: blink-lbl-back 2.3s infinite;
}
@-webkit-keyframes blink-lbl-back {
  0% {
    opacity: 1;
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  80% {
    opacity: 0.4;
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes blink-lbl-back {
  0% {
    opacity: 1;
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  80% {
    opacity: 0.4;
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@-webkit-keyframes blink-lbl {
  0% {
    opacity: 0;
  }
  49% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
@keyframes blink-lbl {
  0% {
    opacity: 0;
  }
  49% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
}
.ec-main-menu ul li:hover > a {
  color: #139487 !important;
}
.ec-main-menu ul li .mega-menu {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 100%;
  margin-top: 15px;
  padding: 20px 0px 30px 30px;
  position: absolute;
  -webkit-box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.1);
  background: #ffffff;
  opacity: 0;
  visibility: hidden;
  left: 0;
  z-index: 15;
  border-radius: 30px;
}
.ec-main-menu ul li .mega-menu li ul {
  width: 25%;
  margin-right: 30px;
}
.ec-main-menu ul li .mega-menu li ul li.menu_title a {
  color: #444444;
  font-size: 14px;
  font-weight: 600;
  display: block;
  border-bottom: 1px solid #eeeeee;
  margin-bottom: 10px;
  padding-bottom: 5px;
  height: auto;
}
.ec-main-menu ul li .mega-menu li ul li.menu_title a:hover {
  color: #222;
}
.ec-main-menu ul li .mega-menu li ul li a {
  color: #777;
  text-transform: capitalize;
  line-height: 30px;
  font-weight: 400;
  font-size: 14px;
  display: block;
  padding: 3px 0;
  border: 0;
  height: auto;
}
.ec-main-menu ul li .mega-menu li ul li a:hover {
  color: #222;
}
.ec-main-menu ul li .mega-menu ul.ec-main-banner {
  margin-top: 20px;
}
.ec-main-menu ul li .mega-menu ul.ec-main-banner li {
  width: 25%;
  padding-right: 30px;
}
.ec-main-menu ul li .mega-menu ul.ec-main-banner li a {
  height: auto;
  padding: 0;
  margin: 0;
  position: relative;
  overflow: hidden;
  border-radius: 30px;
}
.ec-main-menu ul li.active > a {
  color: #139487 !important;
}
.ec-main-menu ul li.dropdown {
  position: relative;
}
.ec-main-menu ul li.dropdown ul.sub-menu {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  min-width: 215px;
  margin-top: 15px;
  padding: 15px 0;
  position: absolute;
  text-align: left;
  opacity: 0;
  visibility: hidden;
  left: auto !important;
  background: #ffffff;
  -webkit-box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.1);
  display: block;
  z-index: 9;
  border-radius: 30px;
}
.ec-main-menu ul li.dropdown ul.sub-menu .bg {
  width: 100%;
  height: 100%;
  position: absolute;
  right: 0;
  bottom: 0;
  background-image: url("../images/bg/menu-bg-8.png");
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-position: bottom;
  z-index: -1;
}
.ec-main-menu ul li.dropdown ul li {
  padding: 0;
  margin: 0;
  display: block;
}
.ec-main-menu ul li.dropdown ul li a {
  display: block;
  line-height: 20px;
  padding: 8px 20px;
  font-weight: 400;
  font-size: 14px;
  color: #777;
  text-transform: capitalize;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.ec-main-menu ul li.dropdown ul li .label-note-new {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 5px;
  height: 20px;
  background: #faa4a4;
  cursor: default;
  display: none;
  position: absolute;
  top: 8px;
  left: 0px;
  z-index: 16;
  border-radius: 0 4px 4px 0;
}
.ec-main-menu ul li.dropdown ul li .label-note-hot {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 5px;
  height: 20px;
  background: #8ab386;
  cursor: default;
  display: none;
  position: absolute;
  top: 8px;
  left: 0px;
  z-index: 16;
  border-radius: 0 4px 4px 0;
}
.ec-main-menu ul li.dropdown ul li .label-note-trending {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 5px;
  height: 20px;
  background: #1980af;
  cursor: default;
  display: none;
  position: absolute;
  top: 8px;
  left: 0px;
  z-index: 16;
  border-radius: 0 4px 4px 0;
}
.ec-main-menu ul li.dropdown li.position-static {
  position: relative !important;
}
.ec-main-menu ul li.dropdown li.position-static:hover .sub-menu.sub-menu-child {
  margin: 0;
  opacity: 1;
  visibility: visible;
}
.ec-main-menu ul li.dropdown ul.sub-menu.sub-menu-child {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  margin: 15px 0 0 0;
  left: 100% !important;
  opacity: 0;
  visibility: hidden;
  top: 0;
}
.ec-main-menu ul li.dropdown:hover .sub-menu {
  margin-top: 0;
  opacity: 1;
  visibility: visible;
}
.ec-main-menu ul li.dropdown:hover .mega-menu {
  margin-top: 0;
  opacity: 1;
  visibility: visible;
}
.ec-main-menu > ul > li > a:before {
  content: "";
  position: absolute;
  top: auto;
  bottom: 0;
  height: 2px;
  width: 0;
  margin: 0 auto;
  background: transparent;
  left: 0;
  right: auto;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.ec-main-menu > ul > li:hover > a:before {
  background: #139487;
  width: 100%;
}
.ec-main-menu > ul > li.active > a:before {
  background: #139487;
  width: 100%;
}

/*----  Desktop search  ----*/
.header-search {
  width: 500px;
  position: relative;
}
.header-search .form-control {
  display: block;
  width: 100%;
  min-height: 45px;
  height: 45px;
  padding: 10px 15px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1;
  color: #777777;
  border-radius: 30px;
  border: 1px solid #eeeeee;
  letter-spacing: 0.5px;
}

.action-form {
  position: relative;
}

.submit {
  position: absolute;
  top: 0;
  left: auto;
  right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 45px;
  height: 100%;
  background: transparent;
  color: #222;
  font-size: 16px;
  border-radius: 0px;
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: 0;
  padding: 0;
}
.submit .header_svg {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 14px;
  height: 14px;
  fill: #444;
  margin-bottom: 1px;
}
.submit .header_svg:hover {
  fill: #139487;
}
.submit:hover {
  color: #139487;
}
.submit:hover .header_svg {
  fill: #139487;
}

/*----  Side Cart & Side Menu Toggle  ----*/
body.ec-open {
  overflow: hidden;
}
body.ec-open:before {
  height: 100%;
  width: 100%;
  background: #000000;
  opacity: 0.7;
  position: absolute;
  z-index: 998;
  content: "";
}

.ec-side-cart-overlay {
  display: none;
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 16;
}

.ec-side-cart {
  font-size: 14px;
  font-weight: 400;
  position: fixed;
  z-index: 1000;
  top: 0;
  right: 0;
  left: auto;
  display: block;
  width: 350px;
  height: 100%;
  padding: 15px 20px 20px 20px;
  -webkit-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  background-color: #ffffff;
  -webkit-box-shadow: none;
          box-shadow: none;
  overflow: auto;
  opacity: 0;
}
.ec-side-cart .text-right {
  font-weight: 700;
}
.ec-side-cart .ec-cart-inner {
  position: relative;
  z-index: 9;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  height: 100%;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.ec-side-cart .ec-cart-inner .ec-cart-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  width: 100%;
  padding: 0 0 10px 0;
  border-bottom: 2px solid #eeeeee;
  margin-bottom: 20px;
}
.ec-side-cart .ec-cart-inner .ec-cart-title .cart_title {
  font-size: 17px;
  color: #222;
  font-family: "Montserrat";
  font-weight: 600;
}
.ec-side-cart .ec-cart-inner .ec-cart-title .ec-close {
  position: relative;
  border: 0;
  font-size: 30px;
  line-height: 1;
  color: #222;
}
.ec-side-cart .ec-cart-inner .ec-cart-bottom .cart_btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-bottom: 20px;
}
.ec-side-cart .ec-cart-inner .ec-cart-bottom .cart_btn a {
  width: 48%;
  height: 40px;
  display: block;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 14px;
  border: none;
  -webkit-box-shadow: none;
          box-shadow: none;
  padding: 8px 15px;
  line-height: 22px;
  border-radius: 15px;
}
.ec-side-cart .ec-cart-inner .ec-cart-bottom .cart-sub-total {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-top: 0;
  padding-bottom: 8px;
  border-top: 1px solid #eeeeee;
  margin: 20px 0 0 0px;
}
.ec-side-cart .ec-cart-inner .ec-cart-bottom .cart-sub-total table {
  margin: 10px 0 0 0;
}
.ec-side-cart .ec-cart-inner .ec-cart-bottom .cart-sub-total table tr td {
  border: none;
}
.ec-side-cart .ec-menu-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  width: 100%;
  padding: 0 0 10px 0;
  border-bottom: 2px solid #eeeeee;
  margin-bottom: 30px;
  margin-bottom: 10px;
}
.ec-side-cart .ec-menu-title .menu_title {
  font-size: 18px;
  color: #139487;
  font-family: "Poppins, sans-serif";
  font-weight: 600;
}
.ec-side-cart .ec-menu-title .ec-close {
  position: relative;
  border: 0;
  font-size: 30px;
  line-height: 1;
  color: #222;
}
.ec-side-cart .ec-menu-inner .ec-menu-content ul li {
  position: relative;
  display: block;
  line-height: 28px;
}
.ec-side-cart .ec-menu-inner .ec-menu-content ul li a {
  display: block;
  padding: 10px 0px;
  text-transform: capitalize;
  color: #444444;
  border-bottom: 1px solid #ededed;
  font-size: 15px;
  font-weight: 500;
}
.ec-side-cart .ec-menu-inner .ec-menu-content ul li .sub-menu {
  position: static;
  top: auto;
  display: none;
  visibility: visible;
  width: 100%;
  min-width: auto;
  padding: 0;
  -webkit-transition: none;
  transition: none;
  opacity: 1;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.ec-side-cart .ec-menu-inner .ec-menu-content ul li .sub-menu li {
  line-height: inherit;
  position: relative;
}
.ec-side-cart .ec-menu-inner .ec-menu-content ul li .sub-menu li a {
  text-transform: capitalize;
  padding-left: 15px;
  padding-right: 0px;
  display: block;
  border-bottom: 0;
  font-size: 14px;
  font-weight: 500;
  color: #777;
  border-radius: 30px;
  overflow: hidden;
}
.ec-side-cart .ec-menu-inner .ec-menu-content ul li .sub-menu li .sub-menu li a {
  font-weight: 300;
  padding-left: 30px;
  font-size: 14px;
}
.ec-side-cart .ec-menu-inner .ec-menu-content ul li:hover > a {
  color: #222;
}
.ec-side-cart .ec-menu-inner .ec-menu-content ul li:hover > span.menu-toggle:before {
  color: #222;
}
.ec-side-cart .ec-menu-inner .ec-social li {
  display: inline-block;
  margin: 0 10px 0px 0;
  line-height: 40px;
  padding: 0;
}
.ec-side-cart .ec-menu-inner .ec-social li a {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  color: #ffffff;
  background: #222;
  font-size: 16px;
  padding: 0;
  line-height: 40px;
  width: 40px;
  height: 40px;
  border-radius: 100%;
  text-align: center;
  border: none;
  z-index: 1;
  -webkit-transition: all 300ms linear;
  transition: all 300ms linear;
}
.ec-side-cart .ec-menu-inner .ec-social li a:hover {
  background: #212121;
  color: #ffffff;
}

.ec-menu-content > ul > li .menu-toggle {
  position: absolute;
  z-index: 2;
  top: 0;
  right: 0;
  width: 24px;
  height: 44px;
  cursor: pointer;
  background-color: transparent;
}
.ec-menu-content > ul > li .menu-toggle::before {
  width: 100%;
  content: "";
  font-family: "EcIcons";
  -webkit-transition: all 0.5s ease 0s;
  transition: all 0.5s ease 0s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100%;
  color: #444444;
  font-size: 12px;
}
.ec-menu-content > ul > li.active > .menu-toggle::before {
  content: "";
}
.ec-menu-content > ul > li.active > ul > li.active > .menu-toggle::before {
  content: "";
}

.ec-side-cart.ec-mobile-menu {
  right: auto;
  left: 0;
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
  width: 340px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.ec-side-cart.ec-mobile-menu.ec-open {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}

.ec-side-cart.ec-open {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  opacity: 1;
}

.ec-side-cart.ec-cart .ec-cart-inner .ec-cart-title {
  margin-bottom: 30px;
  padding: 0;
}
.ec-side-cart.ec-cart .ec-cart-inner .ec-cart-title .cart_title {
  font-size: 20px;
}

.ec-side-cart.ec-wishlist .ec-cart-inner .ec-cart-title {
  margin-bottom: 30px;
  padding: 0;
}
.ec-side-cart.ec-wishlist .ec-cart-inner .ec-cart-title .cart_title {
  font-size: 20px;
}

.eccart-pro-items {
  margin: 0;
  padding-left: 0;
  list-style: none;
}
.eccart-pro-items li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eeeeee;
}
.eccart-pro-items li .sidekka_pro_img {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 20%;
          flex: 1 0 20%;
}
.eccart-pro-items li .sidekka_pro_img img {
  max-width: 100%;
}
.eccart-pro-items li .ec-pro-content {
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 70%;
          flex: 1 0 70%;
  padding-left: 15px;
  overflow: hidden;
}
.eccart-pro-items li .ec-pro-content .cart_pro_title {
  width: 100%;
  padding-right: 30px;
  text-decoration: none;
  color: #777;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  font-size: 15px;
  line-height: 18px;
  font-weight: 400;
}
.eccart-pro-items li .ec-pro-content .cart_pro_title:hover {
  color: #139487;
}
.eccart-pro-items li .ec-pro-content .cart-price {
  font-size: 14px;
  display: block;
  margin-top: 5px;
}
.eccart-pro-items li .ec-pro-content .cart-price span {
  color: #777;
  font-weight: 700;
  font-size: 16px;
}
.eccart-pro-items li .ec-pro-content .remove {
  line-height: 15px;
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 9px;
  color: #222;
  font-size: 16px;
  background: #ffffff;
}
.eccart-pro-items li .ec-pro-content .remove:hover {
  color: #555;
}
.eccart-pro-items li:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: 0;
}

.eccart-pro-items li .ec-pro-content .qty-plus-minus {
  border: 1px solid #eeeeee;
  display: inline-block;
  height: 35px;
  overflow: hidden;
  padding: 0;
  position: relative;
  width: 85px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 7px 0;
  margin-top: 7px;
}
.eccart-pro-items li .ec-pro-content .qty-plus-minus .ec_qtybtn {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100%;
  cursor: pointer;
  font-size: 20px;
  color: #777;
}
.eccart-pro-items li .ec-pro-content .qty-plus-minus input.qty-input {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  color: #777;
  float: left;
  font-size: 14px;
  height: auto;
  margin: 0;
  padding: 0;
  text-align: center;
  width: 32px;
  outline: none;
  font-weight: 400;
  line-height: 35px;
}
.qty-input-js{
  background: transparent none repeat scroll 0 0;
  border: medium none;
  color: #777;
  float: left;
  font-size: 14px;
  height: auto;
  margin: 0;
  padding: 0;
  text-align: center;
  width: 32px;
  outline: none;
  font-weight: 400;
  line-height: 35px;
}
.eccart-pro-items li .ec-pro-content .qty-plus-minus .dec.ec_qtybtn {
  border-right: 1px solid #eeeeee;
}
.eccart-pro-items li .ec-pro-content .qty-plus-minus .inc.ec_qtybtn {
  border-left: 1px solid #eeeeee;
}

/*-------------------------------------------------
    Site Footer Section
---------------------------------------------------*/
.ec-footer {
  color: #ffffff;
  background: #21325E;
}
.ec-footer .footer-top {
  border-top: 1px solid #3c3c3c;
}
.ec-footer .footer-top .col-sm-12 {
  width: 20%;
}
.ec-footer .footer-top .ec-footer-widget .ec-footer-heading {
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 18px;
  color: #ffffff;
  letter-spacing: 0;
  position: relative;
  display: block;
  width: 100%;
  padding-bottom: 7px;
  text-transform: uppercase;
}
.ec-footer .footer-top .ec-footer-widget .ec-footer-heading::before {
  content: "";
  position: absolute;
  top: auto;
  right: 0;
  left: 0;
  height: 1px;
  border-bottom: 1px solid #139487;
  bottom: 0;
  width: 53px;
}
.ec-footer .footer-top .ec-footer-widget .s-head {
  display: none;
}
.ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link {
  display: block;
  margin: 0;
  line-height: 1.5;
  border: 0;
  padding: 0;
  font-weight: 400;
  font-size: 16px;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link:not(:last-child) {
  margin-bottom: 16px;
}
.ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link a {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  font-size: 16px;
  line-height: 20px;
  padding: 0;
  color: #ffffff;
  margin-bottom: 0;
  display: inline-block;
  position: relative;
  word-break: break-all;
  opacity: 0.4;
  letter-spacing: 0;
  font-weight: 300;
}
.ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link a:hover {
  color: #139487;
  opacity: 1;
}
.ec-footer .footer-top .ec-footer-contact .ec-footer-widget .ec-footer-links li:first-child {
  -webkit-box-align: self-start;
      -ms-flex-align: self-start;
          align-items: self-start;
}
.ec-footer .footer-top .ec-footer-contact .ec-footer-widget .ec-footer-links li p {
  font-weight: 300;
  opacity: 0.4;
}
.ec-footer .footer-top .ec-footer-contact .ec-footer-widget .ec-footer-links a {
  text-transform: unset;
}
.ec-footer .footer-top .ec-footer-contact .ec-footer-widget .ec-footer-links .ec-footer-link span {
  width: 35px;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-footer .footer-top .ec-footer-social {
  margin-bottom: 0;
}
.ec-footer .footer-top .ec-footer-social ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.ec-footer .footer-top .ec-footer-social .ec-footer-widget .ec-footer-links .ec-footer-link {
  padding-right: 5px;
}
.ec-footer .footer-top .ec-footer-social .ec-footer-widget .ec-footer-links .ec-footer-link:not(:last-child) {
  margin-bottom: 0;
}
.ec-footer .footer-top .ec-footer-social .ec-footer-widget .ec-footer-links .ec-footer-link a {
  text-transform: capitalize;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 15px;
}
.ec-footer .footer-top .ec-footer-social .ec-footer-widget .ec-footer-links .ec-footer-link a i {
  font-size: 25px;
  margin-right: 10px;
}

.footer-cat-block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  margin: 0 auto;
}
.footer-cat-block .footer-cat-stitle {
  margin-bottom: 14px;
  font-weight: 600;
  color: #139487;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 0.8px;
}
.footer-cat-block .footer-cat-title {
  font-size: 13px;
  font-weight: 600;
  color: #999;
  letter-spacing: 0;
  line-height: 1;
  text-transform: uppercase;
  margin-bottom: 22px;
}
.footer-cat-block a, .footer-cat-block span {
  color: #787878;
}
.footer-cat-block a {
  padding: 0 5px;
  text-transform: capitalize;
}
.footer-cat-block a:hover {
  color: #999;
}
.footer-cat-block .block {
  margin: 5px 0;
}

div#ec_news_signup {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.ec-footer-contact {
  margin-bottom: 30px;
}

.svg_img.foo_svg {
  height: 25px;
  fill: #ffffff;
  width: auto;
  opacity: 0.4;
}

.ec-foo-location .svg_img.foo_svg {
  margin-top: 3px;
}

.ec-foo-call .svg_img.foo_svg {
  height: 24px;
}

.ec-foo-mail .svg_img.foo_svg {
  height: 20px;
}

.footer-bottom {
  padding: 30px 0;
  border-top: 1px solid #3c3c3c;
}
.footer-bottom .ec-copy {
  color: #ffffff;
  font-size: 13px;
  letter-spacing: 3.2px;
  text-align: center;
  opacity: 0.4;
  font-weight: 300;
}
.footer-bottom .ec-copy a {
  color: #ffffff;
}
.footer-bottom .ec-copy .site-name:hover {
  color: #139487;
}

.footer-bottom-payment {
  margin-bottom: 15px;
}

.ec-heading-res {
  display: none;
}

/*-------------------------------------------------
   Demo 4 Page CSS
---------------------------------------------------*/
/*---------------------------------------------------------------------------------
    Common CSS
-----------------------------------------------------------------------------------*/
body {
  user-select: none;
  /* supported by Chrome and Opera */
  -webkit-user-select: none;
  /* Safari */
  -khtml-user-select: none;
  /* Konqueror HTML */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* Internet Explorer/Edge */
}

/*----- Section Style  -----*/
.section-space-p {
  padding: 40px 0;
}

.section-space-pb {
  padding-bottom: 40px;
}

.section-space-pt {
  padding-top: 40px;
}

.section-space-ptb-100 {
  padding: 800px 0;
}

.section-space-m {
  margin: 40px 0;
}

.section-space-mt {
  margin-top: 40px;
}

.section-space-mb {
  margin-bottom: 40px;
}

.section-space-footer-p {
  padding: 40px 0;
}

.space-t-50 {
  padding-top: 50px;
}

.btn-secondary {
  background-color: #222;
}
.btn-secondary:hover {
  background-color: #555555;
}

/*----- Page Section Animation Style  -----*/
@-webkit-keyframes slideInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@keyframes slideInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(50%);
            transform: translateY(50%);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@-webkit-keyframes slideInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@keyframes slideInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@-webkit-keyframes slideInleft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(50%);
            transform: translateX(50%);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@keyframes slideInleft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(50%);
            transform: translateX(50%);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@-webkit-keyframes slideInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@keyframes slideInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@-webkit-keyframes zoomReverseIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(1.5);
            transform: scale(1.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@keyframes zoomReverseIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(1.5);
            transform: scale(1.5);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@-webkit-keyframes flipInY {
  0% {
    opacity: 0;
    -webkit-transform: rotateY(90deg);
            transform: rotateY(90deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@keyframes flipInY {
  0% {
    opacity: 0;
    -webkit-transform: rotateY(90deg);
            transform: rotateY(90deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
[data-animation] {
  opacity: 0;
  -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
          animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
}

.animations-disabled, .animations-disabled [data-animation] {
  -webkit-animation: none !important;
          animation: none !important;
  opacity: 1 !important;
}

.slideInUp {
  -webkit-animation-name: slideInUp;
          animation-name: slideInUp;
}

.slideInDown {
  -webkit-animation-name: slideInDown;
          animation-name: slideInDown;
}

.slideInLeft {
  -webkit-animation-name: slideInleft;
          animation-name: slideInleft;
}

.slideInRight {
  -webkit-animation-name: slideInRight;
          animation-name: slideInRight;
}

.fadeIn {
  -webkit-animation-name: fadeIn;
          animation-name: fadeIn;
}

.fadeOut {
  -webkit-animation-name: fadeIn;
          animation-name: fadeIn;
  animation-direction: reverse;
}

.zoomIn {
  -webkit-animation-name: zoomIn;
          animation-name: zoomIn;
}

.zoomOut {
  -webkit-animation-name: zoomIn;
          animation-name: zoomIn;
  animation-direction: reverse;
}

.zoomReverseIn {
  -webkit-animation-name: zoomReverseIn;
          animation-name: zoomReverseIn;
}

.zoomReverseOut {
  -webkit-animation-name: zoomReverseIn;
          animation-name: zoomReverseIn;
  animation-direction: reverse;
}

.flipInY {
  -webkit-animation-name: flipInY;
          animation-name: flipInY;
}

.flipOutY {
  -webkit-animation-name: flipInY;
          animation-name: flipInY;
  animation-direction: reverse;
}

/*-----  Margin Style  -----*/
.margin-bottom-30 {
  margin-bottom: 30px;
}

.margin-minus-t-15 {
  margin-top: -15px;
}

.margin-minus-tb-15 {
  margin: -15px 0;
}

.margin-minus-b-30 {
  margin-bottom: -30px;
}

.margin-minus-b-15 {
  margin-bottom: -15px;
}

.btn-primary {
  background-color: #139487;
}
.btn-primary:active, .btn-primary:focus {
  background-color: #139487;
}

/*-----  Scroll UP Style  -----*/
#scrollUp {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 40px;
  height: 40px;
  background-color: #139487;
  color: #ffffff;
  right: 70px;
  bottom: 15px;
  text-align: center;
  overflow: hidden;
  z-index: 15 !important;
  font-size: 18px;
  line-height: 40px;
  -webkit-box-shadow: 0 0 10px rgba(12, 12, 12, 0.3);
          box-shadow: 0 0 10px rgba(12, 12, 12, 0.3);
  border-radius: 30px;
}
#scrollUp:hover {
  background: #555;
  -webkit-box-shadow: 0 0 10px rgba(12, 12, 12, 0.5);
          box-shadow: 0 0 10px rgba(12, 12, 12, 0.5);
}

.timerDisplay > span.displaySection {
  display: block;
  background-color: #f3f3f3;
  border-radius: 15px;
}

.numberDisplay {
  min-height: 20px;
  margin-bottom: 0 !important;
  font-weight: 500;
}

.labelformat {
  font-size: 12px;
}

/*-----  Slider Style  -----*/
.slider-animation > * {
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-name: fadeOutDown;
          animation-name: fadeOutDown;
}

.swiper-slide-active .slider-animation > * {
  -webkit-animation-name: fadeInDown;
          animation-name: fadeInDown;
}
.swiper-slide-active .slider-animation > *:nth-child(1) {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
.swiper-slide-active .slider-animation > *:nth-child(2) {
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
.swiper-slide-active .slider-animation > *:nth-child(3) {
  -webkit-animation-delay: 1.5s;
          animation-delay: 1.5s;
}
.swiper-slide-active .slider-animation > *:nth-child(4) {
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}
.swiper-slide-active .slider-animation > *:nth-child(5) {
  -webkit-animation-delay: 2.5s;
          animation-delay: 2.5s;
}
.swiper-slide-active .slider-animation > *:nth-child(6) {
  -webkit-animation-delay: 3s;
          animation-delay: 3s;
}

.section-title {
  margin-bottom: 15px;
  margin-top: -3px;
  padding: 0;
  position: relative;
  border-bottom: 1px solid #eeeeee;
  padding-bottom: 15px;
}
.section-title .ec-title {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 0;
  color: #222;
  letter-spacing: 0.4px;
  position: relative;
  display: inline;
  padding: 0;
  text-transform: capitalize;
  line-height: 1;
}

.text-upper {
  text-transform: uppercase;
}

#ec-fixedbutton {
  top: 26.8%;
  right: 5px;
  position: fixed;
  z-index: 998;
  display: -ms-inline-flexbox;
  display: -webkit-inline-box;
  display: inline-flex;
  -ms-flex-direction: column;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -ms-flex-pack: start;
  -webkit-box-pack: start;
          justify-content: flex-start;
  -ms-flex-line-pack: center;
  align-content: center;
  -ms-flex-align: end;
  -webkit-box-align: end;
          align-items: flex-end;
  direction: ltr;
}
#ec-fixedbutton * {
  direction: ltr;
}
#ec-fixedbutton > * {
  display: block;
  position: relative;
}
#ec-fixedbutton .ec-change-color .ec-color-desc {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  position: absolute;
  right: 0;
  top: 0;
  padding: 8px 15px 7px 12px;
  white-space: nowrap;
  background-color: #000000;
  height: 35px;
  border-radius: 5px;
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
  -webkit-transform: translate(calc(100% + 5px), 0);
  transform: translate(calc(100% + 5px), 0);
  -webkit-transform: translate3d(calc(100% + 5px), 0, 0);
  transform: translate3d(calc(100% + 5px), 0, 0);
}
#ec-fixedbutton .ec-change-color .ec-color-desc .ec-color-title {
  font-weight: 600;
  color: #ffffff;
  padding-right: 7px;
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -ms-flex-line-pack: start;
      align-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul li {
  width: 20px;
  height: 20px;
  margin-left: 10px;
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul li a {
  width: 100%;
  height: 100%;
  display: block;
  border-radius: 50%;
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
  text-align: center;
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul li:hover a {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul li a.colorcode1 {
  background-color: #3474d4;
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul li a.colorcode2 {
  background-color: #7f77fd;
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul li a.colorcode3 {
  background-color: #ff764b;
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul li.active {
  pointer-events: none;
}
#ec-fixedbutton .ec-change-color .ec-color-desc ul li.active a:before {
  content: "";
  color: #ffffff;
  font-size: 12px;
  line-height: 1;
  position: relative;
  top: 0;
  font-family: "EcIcons";
  font-style: normal;
  font-weight: 400;
}
#ec-fixedbutton .ec-change-color:hover .ec-color-desc {
  -webkit-transform: translate(0%, 0);
  transform: translate(0%, 0);
  -webkit-transform: translate3d(0%, 0, 0);
  transform: translate3d(0%, 0, 0);
}
#ec-fixedbutton .ec-change-rtl {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  padding: 0;
  white-space: nowrap;
  height: 35px;
  border-radius: 5px;
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
  width: 40px;
  margin-bottom: 10px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  overflow: hidden;
}
#ec-fixedbutton .ec-change-rtl > * {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  color: #ffffff;
  font-size: 12px;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 40px;
          flex: 0 0 40px;
}
#ec-fixedbutton .ec-change-rtl .ec-rtl-btn {
  pointer-events: none;
  background-color: #222;
  padding: 0 9px 0;
}
#ec-fixedbutton .ec-change-rtl .ec-rtl-switch > * {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  padding: 0 7px 0;
}
#ec-fixedbutton .ec-change-rtl .ec-rtl-off {
  background-color: red;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
#ec-fixedbutton .ec-change-rtl .ec-rtl-on {
  background-color: green;
  color: #ffffff;
  display: none;
}
#ec-fixedbutton .ec-change-rtl:hover {
  width: 80px;
}
#ec-fixedbutton .ec-change-rtl.active {
  width: 80px;
}
#ec-fixedbutton .ec-change-rtl.active .ec-rtl-on {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
#ec-fixedbutton .ec-change-rtl.active .ec-rtl-off {
  display: none;
}
#ec-fixedbutton .ec-change-mode {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  padding: 0;
  white-space: nowrap;
  height: 35px;
  border-radius: 5px;
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
  width: 40px;
  margin-bottom: 10px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  overflow: hidden;
}
#ec-fixedbutton .ec-change-mode > * {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  color: #ffffff;
  font-size: 12px;
}
#ec-fixedbutton .ec-change-mode .ec-mode-btn {
  pointer-events: none;
  background-color: #222;
  padding: 0 7px 0;
  font-size: 10px;
}
#ec-fixedbutton .ec-change-mode .ec-mode-switch > * {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  padding: 0 7px 0;
}
#ec-fixedbutton .ec-change-mode .ec-mode-off {
  background-color: red;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
#ec-fixedbutton .ec-change-mode .ec-mode-on {
  background-color: green;
  color: #ffffff;
  display: none;
}
#ec-fixedbutton .ec-change-mode:hover {
  width: 80px;
}
#ec-fixedbutton .ec-change-mode.active {
  width: 80px;
}
#ec-fixedbutton .ec-change-mode.active .ec-mode-on {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
#ec-fixedbutton .ec-change-mode.active .ec-mode-off {
  display: none;
}

.ec-cc-style .cc-button {
  background-color: #139487;
  border-radius: 30px;
}
.ec-cc-style .cc-right-bottom {
  z-index: 15;
}
.ec-cc-style .cc-panel .cc-header {
  background-color: #139487;
}
.ec-cc-style .cc-footer .cc-call-button:before {
  background-color: #139487;
}

/*-----  Select Style  -----*/
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
  border: 0 !important;
  background: transparent;
  background-image: none;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  padding: 0 10px;
  color: #777777;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}

.ec-select-inner {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 172px;
  height: 40px;
  line-height: 2.9;
  background: #ffffff;
  overflow: hidden;
  border-radius: 0;
}
.ec-select-inner::after {
  content: "";
  position: absolute;
  font-family: "EcIcons";
  top: 0;
  right: 0;
  padding: 0 10px;
  cursor: pointer;
  pointer-events: none;
  font-size: 24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 40px;
  line-height: 1;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #777777;
}

/*-----  Product Countdown Style  -----*/
ul.slick-dots {
  text-align: center;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-top: 25px;
}

.slick-dots li {
  width: 20px;
  height: 20px;
  display: inline-block;
  border-radius: 10px;
  opacity: 1;
  border: none;
  margin: 0 2.5px;
  -webkit-box-shadow: none;
          box-shadow: none;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  background-color: #555;
  cursor: pointer;
}
.slick-dots li button {
  width: 100%;
  height: 100%;
  padding: 0;
  font-size: 0;
}
.slick-dots li:hover {
  background-color: #3474d4;
}
.slick-dots li.slick-active {
  background-color: #3474d4;
  width: 40px;
}

.slick-arrow {
  position: absolute;
  top: 45%;
  left: auto;
  right: auto;
  margin: 0 auto;
  font-size: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 30px;
  height: 30px;
  padding: 0;
  z-index: 1;
}
.slick-arrow:before {
  content: "";
  color: #444444;
  position: relative;
  font-size: 24px;
  font-family: "EcIcons";
  width: 100%;
  line-height: 30px;
  height: 30px;
}
.slick-arrow:hover:before {
  color: #139487;
}

.slick-arrow.slick-prev {
  left: 0;
  right: auto;
}
.slick-arrow.slick-prev:before {
  content: "";
}

.slick-arrow.slick-next {
  right: 0;
  left: auto;
}
.slick-arrow.slick-next:before {
  content: "";
}

.numberDisplay {
  color: #222;
  margin-bottom: 10px;
}

.timerDisplay > span.displaySection:not(:last-child):before {
  position: absolute;
  left: auto;
  right: -20px;
  content: ":";
  color: #cccccc;
  font-size: 26px;
  top: 22%;
}

/*-----  Overlay  -----*/
#ec-overlay {
  display: block;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: #ffffff;
  z-index: 999999999999;
}
#ec-overlay .loader_img {
  display: block;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 999999999999;
  background: #ffffff url("../images/common/loader.gif") no-repeat scroll 50% 50%;
  pointer-events: none;
  overflow: hidden;
}

/*-----  New Popup Window  -----*/
#ec-popnews-bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
  filter: alpha(opacity=80);
  opacity: 0.8;
  display: none;
  z-index: 9998;
}

#ec-popnews-box {
  position: fixed;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #ffffff;
  color: #444444;
  width: 100%;
  max-width: 600px;
  padding: 30px;
  border: 15px solid #139487;
  display: none;
  z-index: 9999;
  text-align: center;
}
#ec-popnews-box h1, #ec-popnews-box .h1 {
  text-decoration: none;
  color: #555;
  display: block;
  font-size: 28px;
  line-height: 1.2;
  font-weight: 700;
  margin: 0 auto 17px;
  letter-spacing: 0;
  text-transform: capitalize;
}
#ec-popnews-box form {
  margin-bottom: 0px;
}
#ec-popnews-box input {
  background-color: transparent;
  border: 1px solid #eeeeee;
  color: #444444;
  font-size: 14px;
  margin-bottom: 27px;
  padding: 0 15px;
  width: 100%;
  outline: none;
}
#ec-popnews-box button {
  height: 40px;
  font-size: 17px;
  text-transform: uppercase;
  line-height: 40px;
}

#ec-popnews-close {
  position: absolute;
  top: 5px;
  right: 5px;
  cursor: pointer;
  width: 30px;
  height: 30px;
  color: #ffffff;
  background-color: #139487;
  border-color: #139487;
  border-radius: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 16px;
  line-height: 1;
}

#ec-overlay {
  display: block;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: #ffffff;
  z-index: 999999999999;
}
#ec-overlay .loader_img {
  display: block;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 999999999999;
  background: #ffffff url("../images/common/loader.gif") no-repeat scroll 50% 50%;
  pointer-events: none;
  overflow: hidden;
  background-size: 65px;
}

/*-----  Add To Cart Toast  -----*/
.addtocart_toast {
  visibility: hidden;
  min-width: 290px;
  height: auto;
  margin: auto;
  background-color: rgba(0, 128, 0, 0.8);
  color: #ffffff;
  text-align: center;
  border-radius: 30px;
  position: fixed;
  z-index: 9999;
  left: 15px;
  right: auto;
  bottom: 15px;
  font-size: 14px;
  white-space: nowrap;
}
.addtocart_toast .desc {
  color: #ffffff;
  padding: 10px 15px;
  overflow: hidden;
  white-space: nowrap;
}

.addtocart_toast.show {
  visibility: visible;
  -webkit-animation: fadeInUp 0.5s, fadeInOut 0.5s 2.5s;
  animation: fadeInUp 0.5s, fadeInOut 0.5s 4.5s;
}

/*-----  Wishlist  -----*/
.wishlist_toast {
  visibility: hidden;
  min-width: 290px;
  height: auto;
  margin: auto;
  background-color: rgba(0, 128, 0, 0.8);
  color: #ffffff;
  text-align: center;
  border-radius: 30px;
  position: fixed;
  z-index: 9999;
  left: 15px;
  right: auto;
  bottom: 15px;
  font-size: 14px;
  white-space: nowrap;
}
.wishlist_toast .desc {
  color: #ffffff;
  padding: 10px 15px;
  overflow: hidden;
  white-space: nowrap;
}

.wishlist_toast.show {
  visibility: visible;
  -webkit-animation: fadeInUp 0.5s, fadeInOut 0.5s 2.5s;
  animation: fadeInUp 0.5s, fadeInOut 0.5s 4.5s;
}

/*======  Sidebar Panel  ======*/
/*-----  Layout switcher  -----*/
.bg-switcher {
  position: fixed;
  right: -163px;
  top: 28%;
  width: 158px;
  z-index: 12;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.bg-switcher .bg-option-box img {
  width: 25px;
  height: 25px;
}
.bg-switcher .option-box-title {
  padding: 3px 15px;
  background-color: #222;
}
.bg-switcher .option-box-title h3, .bg-switcher .option-box-title .h3 {
  color: #fff;
  margin: 0;
  font-size: 18px;
  text-align: center;
  padding: 6px 5px;
}
.bg-switcher ul {
  margin: 0;
  background: #fff;
  padding: 18px;
  overflow: hidden;
  border: 2px solid #222;
}
.bg-switcher ul li {
  width: 25px;
  height: 25px;
  margin: 7px;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-transition: all ease-in 0.3s;
  transition: all ease-in 0.3s;
}
.bg-switcher ul li span {
  cursor: pointer;
}
.bg-switcher ul .bg {
  width: 100%;
  margin: 0 5px;
}
.bg-switcher ul .bg a {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  color: #222;
  font-size: 13px;
}
.bg-switcher ul .bg a:hover {
  margin-left: 5px;
}
.bg-switcher .section i {
  font-size: 16px;
  margin-right: 10px;
}
.bg-switcher a.bg-option-box {
  position: absolute;
  right: 164px;
  width: 40px;
  height: 41px;
  color: #000;
  background-color: #222;
  -webkit-transition: all ease-in 0.3s;
  transition: all ease-in 0.3s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  font-size: 25px;
  z-index: -1;
  text-decoration: none;
  top: 0;
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}
.bg-switcher .skin-color {
  width: 25px;
  height: 25px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.bg-switcher .skin a {
  display: block;
  width: 30px;
  height: 30px;
  margin-left: 0;
  margin-top: 0;
  margin-right: 5px;
  text-align: center;
  line-height: 30px;
  border: 2px transparent solid;
}

.bg-panel {
  margin: 0;
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -ms-flex-line-pack: start;
      align-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  list-style: none;
}
.bg-panel .bg {
  margin: 5px;
}
.bg-panel .bg a {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
          box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
  -webkit-transition: transform 0.2s;
  -webkit-transition: -webkit-transform 0.2s;
  transition: -webkit-transform 0.2s;
  transition: transform 0.2s;
  transition: transform 0.2s, -webkit-transform 0.2s;
  margin: 0 auto;
  font-size: 0;
  width: 50px;
  display: block;
  height: 50px;
  background-size: cover;
  background-repeat: no-repeat;
}
.bg-panel .bg a:hover {
  -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
          box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
}
.bg-panel .bg .back-bg-4 {
  background-image: url("../images/bg/display-bg-0.png");
}
.bg-panel .bg .back-bg-1 {
  background-image: url("../images/bg/display-bg-1.png");
}
.bg-panel .bg .back-bg-2 {
  background-image: url("../images/bg/display-bg-2.png");
}
.bg-panel .bg .back-bg-3 {
  background-image: url("../images/bg/display-bg-3.png");
}

/*-----  Language switcher  -----*/
.lang-switcher {
  position: fixed;
  right: -163px;
  top: 28%;
  width: 158px;
  z-index: 12;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.lang-switcher .lang-option-box img {
  width: 25px;
  height: 25px;
}
.lang-switcher .option-box-title {
  padding: 5px 7px;
  margin-bottom: 10px;
  background-color: #222;
  height: 40px;
  overflow: hidden;
}
.lang-switcher .option-box-title h3, .lang-switcher .option-box-title .h3 {
  color: #fff;
  margin: 0;
  font-size: 18px;
  text-align: center;
  padding: 6px 5px;
}
.lang-switcher ul {
  margin: 0;
  background: #fff;
  padding: 18px;
  overflow: hidden;
  border: 2px solid #222;
}
.lang-switcher ul li {
  width: 25px;
  height: 25px;
  margin: 7px;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-transition: all ease-in 0.3s;
  transition: all ease-in 0.3s;
}
.lang-switcher ul li span {
  cursor: pointer;
}
.lang-switcher ul .lang {
  width: 100%;
  margin: 0 5px;
}
.lang-switcher ul .lang a {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  color: #555;
  font-size: 13px;
}
.lang-switcher ul .lang a:hover {
  margin-left: 5px;
}
.lang-switcher .lang-panel {
  padding: 12px;
}
.lang-switcher .section i {
  font-size: 16px;
  margin-right: 10px;
}
.lang-switcher a.lang-option-box {
  position: absolute;
  right: 164px;
  width: 40px;
  height: 41px;
  color: #ffffff;
  font-size: 12px;
  background-color: #222;
  -webkit-transition: all ease-in 0.3s;
  transition: all ease-in 0.3s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  z-index: -1;
  text-decoration: none;
  top: 0;
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}
.lang-switcher .skin-color {
  width: 25px;
  height: 25px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.lang-switcher .skin a {
  display: block;
  width: 30px;
  height: 30px;
  margin-left: 0;
  margin-top: 0;
  margin-right: 5px;
  text-align: center;
  line-height: 30px;
  border: 2px transparent solid;
}

.ec-tools-sidebar-overlay {
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 16;
  display: none;
  -webkit-filter: blur(3px);
          filter: blur(3px);
}

.ec-tools-sidebar {
  width: 280px;
  height: 100vh;
  position: fixed;
  right: -280px;
  top: 0;
  background-color: #fff;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  z-index: 16;
}
.ec-tools-sidebar ::-webkit-scrollbar {
  width: 5px;
}
.ec-tools-sidebar ::-webkit-scrollbar-track {
  background: #f1f1f1;
}
.ec-tools-sidebar ::-webkit-scrollbar-thumb {
  background: #888;
}
.ec-tools-sidebar ::-webkit-scrollbar-thumb:hover {
  background: #555;
}
.ec-tools-sidebar .ec-tools-detail {
  height: calc(100vh - 60px);
  overflow-y: auto;
}
.ec-tools-sidebar .tool-title {
  padding: 15px;
  border-bottom: 1px solid #eeeeee;
}
.ec-tools-sidebar .tool-title h3, .ec-tools-sidebar .tool-title .h3 {
  line-height: 28px;
  margin: 0;
  font-size: 20px;
  color: #777;
  font-weight: 700;
  text-transform: uppercase;
}
.ec-tools-sidebar .ec-tools-sidebar-toggle {
  position: absolute;
  top: 32%;
  right: 282px;
  width: 40px;
  height: 40px;
  color: #000;
  background-color: #373840;
  -webkit-transition: all ease-in 0.3s;
  transition: all ease-in 0.3s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  font-size: 25px;
  z-index: -1;
  text-decoration: none;
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}
.ec-tools-sidebar .ec-tools-sidebar-toggle img {
  width: 27px;
  -webkit-animation: rotation 3s infinite linear;
          animation: rotation 3s infinite linear;
}
@-webkit-keyframes rotation {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}
@keyframes rotation {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}
.ec-tools-sidebar .ec-tools-sidebar-content {
  padding: 15px;
  border-bottom: 1px solid #eeeeee;
}
.ec-tools-sidebar .ec-tools-sidebar-content h3, .ec-tools-sidebar .ec-tools-sidebar-content .h3 {
  margin-bottom: 10px;
  line-height: 28px;
  font-size: 18px;
  color: #777;
  font-weight: 600;
}
.ec-tools-sidebar .ec-tools-sidebar-content li {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.ec-tools-sidebar .ec-tools-sidebar-content .ec-change-lang {
  width: 100%;
  height: 28px;
  padding-bottom: 29px;
  overflow: hidden;
  border: 1px solid #eeeeee;
}
.ec-tools-sidebar .ec-tools-sidebar-content .ec-change-lang #google_translate_element span {
  display: none;
}
.ec-tools-sidebar .ec-tools-sidebar-content .ec-change-lang #google_translate_element select {
  width: 100%;
  -webkit-appearance: none;
  -moz-appearance: none;
  padding-right: 10px;
  background: url(../images/common/arrow-down-light.png);
  background-position-x: 0%;
  background-position-y: 0%;
  background-repeat: repeat;
  background-position-x: 0%;
  background-position-y: 0%;
  background-repeat: repeat;
  background-repeat: no-repeat;
  background-position: 96% 42%;
  color: #777;
}
.ec-tools-sidebar .ec-tools-sidebar-content .ec-change-lang #google_translate_element select option {
  color: #777;
  background: #fff;
}
.ec-tools-sidebar .ec-tools-sidebar-content .ec-change-lang #google_translate_element .goog-te-gadget .goog-te-combo {
  margin: 5px 0;
}
.ec-tools-sidebar .ec-color-desc .ec-color-title {
  font-weight: 600;
  color: #ffffff;
  padding-right: 7px;
}
.ec-tools-sidebar .ec-color-desc ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -ms-flex-line-pack: start;
      align-content: flex-start;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
}
.ec-tools-sidebar .ec-color-desc ul li {
  width: 20px;
  height: 20px;
  margin-right: 10px;
}
.ec-tools-sidebar .ec-color-desc ul li a {
  width: 100%;
  height: 100%;
  display: block;
  border-radius: 50%;
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
  text-align: center;
}
.ec-tools-sidebar .ec-color-desc ul li:hover {
  margin-left: 0 !important;
}
.ec-tools-sidebar .ec-color-desc ul li:hover a {
  margin-left: 0 !important;
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.ec-tools-sidebar .ec-color-desc ul li a.colorcode1 {
  background-color: #3474d4;
}
.ec-tools-sidebar .ec-color-desc ul li a.colorcode2 {
  background-color: #7f77fd;
}
.ec-tools-sidebar .ec-color-desc ul li a.colorcode3 {
  background-color: #ff764b;
}
.ec-tools-sidebar .ec-color-desc ul li.active {
  pointer-events: none;
}
.ec-tools-sidebar .ec-color-desc ul li.active a:before {
  content: "";
  color: #ffffff;
  font-size: 12px;
  line-height: 1;
  position: relative;
  top: 0;
  font-family: "EcIcons";
  font-style: normal;
  font-weight: 400;
}
.ec-tools-sidebar .ec-change-mode {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  padding: 0;
  white-space: nowrap;
  height: 35px;
  border-radius: 5px;
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
  width: 80px;
  margin-bottom: 10px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  overflow: hidden;
}
.ec-tools-sidebar .ec-change-mode > * {
  width: 80px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  color: #ffffff;
  font-size: 12px;
}
.ec-tools-sidebar .ec-change-mode .ec-mode-btn {
  width: 40px;
  pointer-events: none;
  background-color: #222;
  padding: 3px 7px 0;
  font-size: 10px;
  cursor: pointer;
}
.ec-tools-sidebar .ec-change-mode .ec-mode-switch > * {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  padding: 3px 7px 0;
}
.ec-tools-sidebar .ec-change-mode .ec-mode-off {
  background-color: red;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-tools-sidebar .ec-change-mode .ec-mode-on {
  background-color: green;
  color: #ffffff;
  display: none;
}
.ec-tools-sidebar .ec-change-mode:hover {
  width: 80px;
}
.ec-tools-sidebar .ec-change-mode.active {
  width: 80px;
}
.ec-tools-sidebar .ec-change-mode.active .ec-mode-on {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-tools-sidebar .ec-change-mode.active .ec-mode-off {
  display: none;
}
.ec-tools-sidebar .ec-change-rtl {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  padding: 0;
  white-space: nowrap;
  height: 35px;
  border-radius: 5px;
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
  width: 80px;
  margin-bottom: 10px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  overflow: hidden;
}
.ec-tools-sidebar .ec-change-rtl > * {
  width: 80px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  color: #ffffff;
  font-size: 12px;
}
.ec-tools-sidebar .ec-change-rtl .ec-rtl-btn {
  pointer-events: none;
  background-color: #222;
  padding: 3px 9px 0;
}
.ec-tools-sidebar .ec-change-rtl .ec-rtl-switch > * {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  padding: 3px 7px 0;
}
.ec-tools-sidebar .ec-change-rtl .ec-rtl-off {
  background-color: red;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-tools-sidebar .ec-change-rtl .ec-rtl-on {
  background-color: green;
  color: #ffffff;
  display: none;
}
.ec-tools-sidebar .ec-change-rtl:hover {
  width: 80px;
}
.ec-tools-sidebar .ec-change-rtl.active {
  width: 80px;
}
.ec-tools-sidebar .ec-change-rtl.active .ec-rtl-on {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-tools-sidebar .ec-change-rtl.active .ec-rtl-off {
  display: none;
}
.ec-tools-sidebar .ec-fullscreen-mode {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  padding: 0;
  white-space: nowrap;
  height: 35px;
  border-radius: 5px;
  -webkit-transition: all 0.2s linear;
  transition: all 0.2s linear;
  width: 80px;
  margin-bottom: 10px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  overflow: hidden;
}
.ec-tools-sidebar .ec-fullscreen-mode > * {
  width: 80px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  color: #ffffff;
  font-size: 12px;
}
.ec-tools-sidebar .ec-fullscreen-mode .ec-fullscreen-btn {
  width: 40px;
  pointer-events: none;
  background-color: #222;
  padding: 3px 7px 0;
  font-size: 10px;
  cursor: pointer;
}
.ec-tools-sidebar .ec-fullscreen-mode .ec-fullscreen-switch > * {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 35px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  text-transform: uppercase;
  cursor: pointer;
  padding: 3px 7px 0;
}
.ec-tools-sidebar .ec-fullscreen-mode .ec-fullscreen-off {
  background-color: red;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-tools-sidebar .ec-fullscreen-mode .ec-fullscreen-on {
  background-color: green;
  color: #ffffff;
  display: none;
}
.ec-tools-sidebar .ec-fullscreen-mode:hover {
  width: 80px;
}
.ec-tools-sidebar .ec-fullscreen-mode.active {
  width: 80px;
}
.ec-tools-sidebar .ec-fullscreen-mode.active .ec-fullscreen-on {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-tools-sidebar .ec-fullscreen-mode.active .ec-fullscreen-off {
  display: none;
}

/*-------------------------------------------------
    Banner Section
---------------------------------------------------*/
.ec-banner-block {
  width: 100%;
  height: 100%;
  padding: 0 15px;
  background-image: url(../images/banner/pemesanan.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.ec-banner-inner {
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  border-radius: 30px;
  overflow: hidden;
}

.banner-block {
  min-height: 515px;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.banner-block img {
  width: 100%;
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.3s ease-in-out;
  transition: 0.3s ease-in-out;
}
.banner-block:hover img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.banner-block .banner-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.banner-block .banner-text .ec-banner-title {
  font-size: 24px;
  position: relative;
  line-height: 1.2;
  color: #444;
  font-weight: 700;
  letter-spacing: 0;
  margin-bottom: 10px;
  text-transform: capitalize;
}
.banner-block .banner-text .ec-banner-disc {
  font-size: 14px;
  font-weight: 600;
  color: #ffffff;
  background: #222;
  text-transform: uppercase;
  letter-spacing: 0;
  position: relative;
  margin-bottom: 15px;
  padding: 5px 12px;
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  border-radius: 30px;
}
.banner-block .banner-text .ec-banner-stitle {
  font-size: 14px;
  font-weight: 400;
  color: #777777;
  text-transform: capitalize;
  letter-spacing: 0;
  position: relative;
  display: block;
}
.banner-block .banner-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  width: 53%;
  height: 100%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 61px 15px 57px;
  cursor: pointer;
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 30px;
}
.banner-block .banner-content .ec-banner-btn a {
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: 0;
  color: #777777;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-weight: 700;
}
.banner-block .banner-content .ec-banner-btn a i {
  margin: 0 5px;
  font-size: 18px;
  font-weight: 700;
}

/*-------------------------------------------------
    Category Section
---------------------------------------------------*/
#ec-cat-slider .owl-dots {
  display: none;
}

.ec_cat_content {
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.ec_cat_inner-1 .ec-category-image {
  background-color: #fff4dc;
  border: 1px solid #eee1c6;
}

.ec_cat_inner-2 .ec-category-image {
  background-color: #edfdf1;
  border: 1px solid #c0e7ca;
}

.ec_cat_inner-3 .ec-category-image {
  background-color: #f4f4ff;
  border: 1px solid #dbdbfa;
}

.ec_cat_inner-4 .ec-category-image {
  background-color: #e4fffa;
  border: 1px solid #c2ebe3;
}

.ec_cat_inner-5 .ec-category-image {
  background-color: #fff7ea;
  border: 1px solid #eee1cc;
}

.ec_cat_inner-6 .ec-category-image {
  background-color: #e8ffed;
  border: 1px solid #c8ebcf;
}

.ec_cat_inner-7 .ec-category-image {
  background-color: #dcfeff;
  border: 1px solid #bde9eb;
}

.ec_cat_inner-8 .ec-category-image {
  background-color: #fdffdc;
  border: 1px solid #dee0af;
}

.ec_cat_inner {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 30px;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 100%;
  overflow: hidden;
  border: 1px solid #eeeeee;
  border-radius: 30px;
}
.ec_cat_inner:hover .ec-category-desc .cat-show-all i {
  margin-left: 10px;
}
.ec_cat_inner:hover .ec-category-image img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.ec_cat_inner .ec-category-image {
  width: 50px;
  height: 50px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  border-radius: 15px;
}
.ec_cat_inner .ec-category-image svg {
  width: 30px;
  height: 30px;
}
.ec_cat_inner .ec-category-image img {
  border-radius: 50%;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.ec_cat_inner svg {
  min-width: 50px;
  fill: #444;
}

.ec-category-desc {
  width: 100%;
  padding-left: 30px;
}
.ec-category-desc h3, .ec-category-desc .h3 {
  width: 100%;
  margin-bottom: 8px;
  padding-right: 30px;
  font-size: 16px;
  font-weight: 600;
  color: #222;
  line-height: 1;
  text-transform: uppercase;
  line-height: 1.3;
  position: relative;
}
.ec-category-desc h3 span, .ec-category-desc .h3 span {
  position: absolute;
  top: 0;
  right: -2px;
  font-size: 11px;
  font-weight: 400;
  color: #777;
}
.ec-category-desc li {
  position: relative;
  padding-left: 16px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 14px;
}
.ec-category-desc li a {
  font-size: 14px;
  color: #777;
  line-height: 1;
  word-break: break-all;
  text-transform: capitalize;
}
.ec-category-desc li a:hover {
  color: #139487;
}
.ec-category-desc li:before {
  content: ">";
  position: absolute;
  top: auto;
  color: #777;
  right: auto;
  left: 0;
  border-radius: 100%;
}
.ec-category-desc .cat-show-all {
  font-size: 14px;
  color: #139487;
  font-weight: 400;
  position: relative;
}
.ec-category-desc .cat-show-all i {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  font-size: 20px;
}

/*-------------------------------------------------
    Instagram Section
---------------------------------------------------*/
section.ec-instagram-section {
  padding-bottom: 30px;
  overflow: hidden;
}

.ec-insta-outer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 0;
  border-radius: 30px;
  overflow: hidden;
}

.ec-insta-inner {
  padding: 0 15px;
}
.ec-insta-inner a {
  width: 100%;
  height: 100%;
  position: relative;
  z-index: 1;
  display: block;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  overflow: hidden;
  border-radius: 30px;
}
.ec-insta-inner a:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: "";
  background: #139487;
  z-index: 2;
  opacity: 0;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.ec-insta-inner a:before {
  font-family: "EcIcons";
  content: "";
  font-size: 35px;
  top: 0;
  left: 0;
  color: #ffffff;
  z-index: 3;
  position: absolute;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  opacity: 0;
  visibility: hidden;
  line-height: 1;
  height: 100%;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  right: 0;
}
.ec-insta-inner a:hover:after {
  opacity: 0.6;
}
.ec-insta-inner a:hover:before {
  opacity: 1;
  visibility: visible;
}
.ec-insta-inner img {
  max-width: 100%;
  width: 150px;
}

/*-------------------------------------------------
    Site Main Section
---------------------------------------------------*/
.ec-slide-item {
  position: relative;
}

.slide-1, .slide-2, .slide-3 {
  height: 60vh;
}

.ec-main-slider .swiper-container {
  border-radius: 50px;
}
.ec-main-slider .slide-1 {
  background-image: url("../images/main-slider-banner/20.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.ec-main-slider .slide-2 {
  background-image: url("../images/main-slider-banner/21.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.ec-main-slider .slide-3 {
  background-image: url("../images/main-slider-banner/22.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.ec-main-slider * {
  direction: ltr;
}
.ec-main-slider .swiper-buttons {
  display: none;
}
.ec-main-slider .swiper-container-horizontal > .swiper-pagination-bullets {
  bottom: 25px;
}

.ec-slide-content {
  width: 50%;
  padding-left: 85px;
  position: relative;
  z-index: 9;
}
.ec-slide-content .ec-slide-title {
  font-size: 55px;
  color: #222;
  margin-bottom: 15px;
  letter-spacing: 0.05rem;
  font-weight: 700;
  position: relative;
  text-transform: uppercase;
  font-family: "Poppins, sans-serif";
  line-height: 1;
}
.ec-slide-content .ec-slide-title span {
  -webkit-writing-mode: vertical-lr;
      -ms-writing-mode: tb-lr;
          writing-mode: vertical-lr;
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
  font-weight: 400;
  letter-spacing: 3px;
  font-size: 50px;
}
.ec-slide-content .ec-slide-stitle {
  font-size: 30px;
  color: #139487;
  margin-bottom: 15px;
  letter-spacing: 10px;
  position: relative;
  font-family: "Poppins, sans-serif";
  text-transform: capitalize;
}
.ec-slide-content .ec-slide-desc {
  display: block;
}
.ec-slide-content p {
  margin-bottom: 15px;
  margin-right: 78px;
  font-size: 20px;
  color: #777;
  line-height: 1;
  letter-spacing: 0;
  font-family: "Poppins, sans-serif";
  font-weight: 500;
}
.ec-slide-content p b {
  font-size: 30px;
  font-weight: 700;
}
.ec-slide-content .btn {
  font-size: 15px;
  text-transform: uppercase;
  padding: 0 36px;
  letter-spacing: 0;
  height: 60px;
  line-height: 60px;
  border-radius: 0;
  border-radius: 15px;
}
.ec-slide-content .btn i {
  margin-left: 3px;
  font-size: 18px;
}
.ec-slide-content .btn:hover {
  background-color: #222;
}

.main-slider-dot .swiper-pagination-bullet {
  width: 15px;
  height: 15px;
  display: inline-block;
  border-radius: 6px;
  opacity: 1;
  border: none;
  margin: 0 2.5px !important;
  -webkit-box-shadow: none;
          box-shadow: none;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  background-color: #202020;
}
.main-slider-dot .swiper-pagination-bullet:hover {
  background-color: #139487;
}
.main-slider-dot .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background-color: #139487;
  width: 30px;
}

.main-slider-dot.dot-color-white .swiper-pagination-bullet:hover {
  background-color: #139487;
}
.main-slider-dot.dot-color-white .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background-color: #139487;
  width: 30px;
}

/*-------------------------------------------------
    New Product Section
---------------------------------------------------*/
.ec-new-product-inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-top: 0;
  margin-right: -15px;
  margin-left: -15px;
}

/*-------------------------------------------------
    Product Tab Section
---------------------------------------------------*/
/* Sidebar area */
.ec-sb-block-content.es-price-slider {
  margin-bottom: 0;
  border-bottom: none;
  padding: 21px 15px 15px;
  font-family: "Montserrat";
}

/*-----  No UI Target  -----*/
.noUi-target {
  cursor: pointer;
}
.noUi-target:focus {
  outline: none;
}

.noUi-connect {
  background: #222 !important;
}

.noUi-horizontal {
  height: 4px;
  margin: 10px 0;
}
.noUi-horizontal .noUi-handle {
  top: -6px;
  right: -15px;
  width: 16px;
  height: 16px;
  background: #ffffff;
  border: 2px solid #222;
  border-radius: 50%;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  cursor: pointer;
  -webkit-transition: -webkit-transform 0.1s;
  transition: -webkit-transform 0.1s;
  transition: transform 0.1s;
  transition: transform 0.1s, -webkit-transform 0.1s;
}

.noUi-connect {
  background: #444444;
}

.noUi-base {
  background: #777777;
}

.noUi-handle.noUi-handle-upper {
  right: 0;
}

/*-----  Price Filter  -----*/
.ec-price-clock {
  margin-top: 15px;
  border-top: 1px solid #eeeeee;
  padding-top: 15px;
}
.ec-price-clock .ec-price-filter {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.ec-price-input {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.ec-price-input .ec-price-divider {
  position: relative;
  border-bottom: 1px solid #777;
  width: 10px;
  height: 1px;
  margin: 0 10px;
}

/*-----  Filter Label  -----*/
.filter__label {
  position: relative;
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: baseline;
      -ms-flex-align: baseline;
          align-items: baseline;
  margin-bottom: 0;
  font-size: 16px;
  color: #777;
}
.filter__label:before {
  color: #777;
  font-size: 15px;
  line-height: 1;
  margin-right: 4px;
}
.filter__label:nth-child(1):before {
  content: "$";
}
.filter__label:nth-child(3):before {
  content: "$";
}

.filter__input {
  height: 30px;
  border: none;
  border-radius: 0;
  padding: 0;
  max-width: 48px;
  line-height: 30px;
  background: #ffffff;
  font-size: 14px;
  color: #777;
}

.ec-product-tab .ec-side-cat-overlay {
  display: none;
  width: 100%;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 16;
}
.ec-product-tab .cat-sidebar {
  margin-bottom: -15px;
  position: sticky;
  top: 30px;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box {
  width: 100%;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap {
  margin-bottom: 30px;
  padding: 25px 30px 20px 30px;
  border: 1px solid #eeeeee;
  border-radius: 30px;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-title h3, .ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-title .h3 {
  text-decoration: none;
  color: #444;
  display: block;
  font-size: 16px;
  line-height: 22px;
  letter-spacing: 0.8px;
  text-transform: uppercase;
  font-weight: 600;
  padding-bottom: 5px;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-title h3 .ec-close, .ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-title .h3 .ec-close {
  display: none;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li {
  padding: 0;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li .ec-sidebar-sub-item a {
  margin: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  color: #777777;
  font-size: 14px;
  margin-top: 0;
  line-height: 20px;
  font-weight: 300;
  text-transform: capitalize;
  letter-spacing: 0;
  cursor: pointer;
  position: relative;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li .ec-sidebar-sub-item a:hover {
  color: #222;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li .ec-sidebar-sub-item a span {
  text-transform: lowercase;
  font-size: 12px;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li .ec-sidebar-block-item {
  padding: 10px 0;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #777;
  font-size: 16px;
  font-weight: 500;
  text-transform: capitalize;
  line-height: 1;
  cursor: pointer;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li .ec-sidebar-block-item .svg_img {
  width: 20px;
  height: 20px;
  margin-right: 10px;
  fill: #139487;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li .ec-sidebar-block-item::after {
  content: "";
  position: absolute;
  right: 0;
  top: 40%;
  font-family: "EcIcons";
  cursor: pointer;
  font-size: 10px;
  color: #777777;
  font-weight: 400;
  margin-left: 7px;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content li li {
  padding: 0 0 6px;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sidebar-block .ec-sb-block-content ul ul {
  border-top: 1px solid #ededed;
  display: none;
  padding-top: 13px;
  padding-bottom: 3px;
}
.ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap .ec-sb-block-content {
  margin-bottom: 0;
  padding: 0;
  border-bottom: none;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .slick-arrow {
  top: -43px;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .slick-arrow:before {
  font-size: 22px;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .slick-arrow.slick-next {
  right: -10px;
  left: auto;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .slick-arrow.slick-prev {
  right: 20px;
  left: auto;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item {
  border: none;
  margin-bottom: 15px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-top: 4px;
  overflow: hidden;
  padding-left: 12px;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-pro-title a {
  text-decoration: none;
  color: #444444;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  font-size: 14px;
  line-height: 1.5;
  letter-spacing: 0.5px;
  font-weight: 400;
  font-family: "Poppins, sans-serif";
  text-transform: capitalize;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-pro-rating {
  margin: 4px 0 6px;
  opacity: 0.7;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-pro-rating i {
  font-size: 12px;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-price {
  font-size: 16px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: left;
      -ms-flex-pack: left;
          justify-content: left;
  color: #777777;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-price span.new-price {
  color: #555;
  font-weight: 600;
  font-size: 14px;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .ec-pro-content .ec-price span.old-price {
  font-size: 13px;
  margin-right: 15px;
  text-decoration: line-through;
  color: #777777;
  line-height: 14px;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .sidekka_pro_img {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 36%;
          flex: 0 0 36%;
}
.ec-product-tab .cat-sidebar .ec-sidebar-slider .ec-sb-pro-sl .ec-sb-pro-sl-item .sidekka_pro_img img {
  max-width: 100%;
  border-radius: 15px;
}
.ec-product-tab .cat-sidebar .ec-sb-slider-title {
  text-decoration: none;
  color: #444;
  display: block;
  font-size: 16px;
  line-height: 22px;
  letter-spacing: 0.8px;
  text-transform: uppercase;
  font-weight: 600;
  padding-bottom: 15px;
}

/* Product area */
.ec-pro-tab {
  margin-top: -50px;
}

.ec-pro-tab-nav {
  margin: 0 auto;
}
.ec-pro-tab-nav .nav-item {
  display: inline-block;
  vertical-align: top;
  font-size: 14px;
  text-transform: uppercase;
  padding: 0;
  cursor: pointer;
  font-weight: 700;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 20px;
  letter-spacing: 0.7px;
}
.ec-pro-tab-nav .nav-item:not(:last-child) {
  margin-right: 65px;
}
.ec-pro-tab-nav .nav-item .nav-link {
  padding: 0;
  color: #777;
  position: relative;
  font-weight: 400;
}
.ec-pro-tab-nav .nav-item .nav-link:hover {
  color: #139487;
}
.ec-pro-tab-nav .nav-item .nav-link.active {
  color: #139487;
}

.ec-product-content {
  padding: 15px;
}

.col-5 {
  width: 20%;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 20%;
  flex: 0 0 20%;
}

.ec-product-inner {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  border: 1px solid #eeeeee;
  cursor: pointer;
  overflow: hidden;
  border-radius: 30px;
}
.ec-product-inner .ec-pro-image {
  position: relative;
  overflow: hidden;
}
.ec-product-inner .ec-pro-image .image {
  position: relative;
  display: block;
  overflow: hidden;
  pointer-events: none;
}
.ec-product-inner .ec-pro-image .image img {
  z-index: 1;
  max-width: 100%;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.ec-product-inner .ec-pro-image .image img.hover-image {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  opacity: 0;
}
.ec-product-inner .ec-pro-image .image .label {
  width: 11px;
  height: 11px;
  position: absolute;
  top: 10px;
  right: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.ec-product-inner .ec-pro-image .image .label .dot {
  width: 5px;
  height: 5px;
  display: block;
  border-radius: 50%;
}
.ec-product-inner .ec-pro-image .image .veg {
  border: 1px solid #46c389;
}
.ec-product-inner .ec-pro-image .image .veg .dot {
  background-color: #46c389;
}
.ec-product-inner .ec-pro-image .image .nonveg {
  border: 1px solid #ff9898;
}
.ec-product-inner .ec-pro-image .image .nonveg .dot {
  background-color: #ff9898;
}
.ec-product-inner .ec-pro-image .flags {
  right: auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding: 0;
  text-transform: uppercase;
  position: absolute;
  top: 5px;
  left: -10px;
  z-index: 2;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.ec-product-inner .ec-pro-image .flags span {
  font-size: 11px;
  font-weight: 500;
  line-height: 12px;
  text-align: left;
  text-transform: uppercase;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #222;
  color: #ffffff;
  letter-spacing: 0.5px;
  position: relative;
  padding: 5px 14px;
}
.ec-product-inner .ec-pro-image .flags span:after {
  content: "";
  width: 40px;
  height: 100%;
  background: #222;
  position: absolute;
  right: 99%;
  left: auto;
  top: 0;
  left: 99%;
  right: auto;
}
.ec-product-inner .ec-pro-image .flags span:before {
  content: "";
  width: 40px;
  height: 100%;
  background: #222;
  position: absolute;
  right: 99%;
  left: auto;
  top: 0;
}
.ec-product-inner .ec-pro-image .flags span.new {
  background: #139487;
}
.ec-product-inner .ec-pro-image .flags span.new:after {
  background: #139487;
}
.ec-product-inner .ec-pro-image .flags span.new:before {
  background: #139487;
}
.ec-product-inner .ec-pro-image .percentage {
  position: absolute;
  z-index: 8;
  top: 15px;
  left: 15px;
  font-size: 13px;
  font-weight: 500;
  line-height: 19px;
  padding: 0 7px;
  text-align: center;
  text-transform: uppercase;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background-color: #46c389;
  border-radius: 30px;
}
.ec-product-inner .ec-pro-image .ec-pro-actions {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  position: absolute;
  z-index: 9;
  top: 10px;
  left: auto;
  right: -10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: 0 auto;
  opacity: 0;
}
.ec-product-inner .ec-pro-image .ec-pro-actions .ec-btn-group {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 30px;
  height: 30px;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  text-decoration: none;
  color: #ffffff;
  background-color: #fff;
  border-radius: 11px;
  border: 1px solid #eeeeee;
}
.ec-product-inner .ec-pro-image .ec-pro-actions .ec-btn-group:hover:not(.active) {
  background-color: #222;
  border: 1px solid #222;
}
.ec-product-inner .ec-pro-image .ec-pro-actions .ec-btn-group:hover .svg_img.pro_svg {
  fill: #ffffff;
}
.ec-product-inner .ec-pro-image .ec-pro-actions .ec-btn-group .svg_img.pro_svg {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.ec-product-inner .ec-pro-image .ec-pro-actions .ec-btn-group:not(:first-child) {
  margin-top: 5px;
}
.ec-product-inner .ec-pro-image-outer {
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  z-index: 11;
  position: relative;
}
.ec-product-inner:hover {
  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}
.ec-product-inner:hover .ec-pro-actions {
  opacity: 1;
  right: 10px;
}
.ec-product-inner:hover .ec-pro-image .image img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.ec-product-inner:hover .ec-pro-image .image img:not(:last-child) {
  opacity: 0;
}
.ec-product-inner:hover .ec-pro-image .image img.hover-image {
  opacity: 1;
}
.ec-product-inner .ec-pro-content {
  position: relative;
  z-index: 10;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding: 15px 0 0;
  text-align: left;
  background-color: #fff;
}
.ec-product-inner .ec-pro-content .ec-pro-stitle {
  padding: 0 20px;
  margin-bottom: 10px;
  font-weight: 500;
  color: #139487;
  font-size: 12px;
  text-transform: uppercase;
}
.ec-product-inner .ec-pro-content .ec-pro-rat-price {
  margin-top: 5px;
  margin-bottom: 15px;
  padding: 0 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}
.ec-product-inner .ec-pro-content .ec-pro-title {
  padding: 0 20px;
  font-size: 16px;
  margin: 0 0 5px;
}
.ec-product-inner .ec-pro-content .ec-pro-title a {
  text-decoration: none;
  color: #777;
  display: block;
  font-size: 13px;
  line-height: 20px;
  font-weight: 300;
  letter-spacing: 0.85px;
  text-transform: capitalize;
}
.ec-product-inner .ec-pro-content .ec-pro-title a:hover {
  color: #222;
}
.ec-product-inner .ec-pro-content .ec-price {
  font-size: 18px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: left;
      -ms-flex-pack: left;
          justify-content: left;
  color: #222;
  letter-spacing: 0.4px;
}
.ec-product-inner .ec-pro-content .ec-price span.new-price {
  color: #222;
  font-weight: 700;
  font-size: 14px;
  margin-right: 7px;
}
.ec-product-inner .ec-pro-content .ec-price span.old-price {
  font-size: 14px;
  text-decoration: line-through;
  color: #777;
}
.ec-product-inner .ec-pro-content .btn {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
}
.ec-product-inner .ec-pro-content .ec-pro-rating {
  margin-bottom: 10px;
  opacity: 0.7;
  position: relative;
}
.ec-product-inner .ec-pro-content .ec-pro-rating .qty {
  position: absolute;
  bottom: 0;
  right: 0;
  color: #777;
  font-size: 13px;
}
.ec-product-inner .ec-pro-image.pro-loading:before {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
  top: 0;
  left: 0;
  right: 0;
  margin: 0 auto;
  content: "";
  opacity: 0.5;
  z-index: 98;
}

.ec-pro-variation {
  margin: 5px 0 0px;
}
.ec-pro-variation .ec-pro-variation-inner {
  font-size: 16px;
  font-weight: 600;
  color: #212121;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  margin-bottom: 15px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-pro-variation .ec-pro-variation-inner > span {
  display: block;
  margin: 0 0 5px;
}
.ec-pro-variation .ec-pro-variation-inner .ec-pro-variation-content li {
  display: inline-block;
  border: 1px solid transparent;
  padding: 1px;
  float: left;
  cursor: pointer;
  margin-right: 5px;
}
.ec-pro-variation .ec-pro-variation-inner.ec-pro-variation-color .ec-pro-variation-content li {
  border-radius: 100%;
}
.ec-pro-variation .ec-pro-variation-inner.ec-pro-variation-color .ec-pro-variation-content li span {
  width: 16px;
  height: 16px;
  display: block;
  border-radius: 100%;
}
.ec-pro-variation .ec-pro-variation-inner.ec-pro-variation-color .ec-pro-variation-content li:hover {
  border: 1px solid #444444;
}
.ec-pro-variation .ec-pro-variation-inner.ec-pro-variation-size .ec-pro-variation-content li {
  height: 22px;
  padding: 2px 8px;
  cursor: pointer;
  border: 1px solid #eeeeee;
  color: #777777;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 12px;
  line-height: 22px;
  border-radius: 0;
  font-weight: 400;
}
.ec-pro-variation .ec-pro-variation-inner.ec-pro-variation-size .ec-pro-variation-content li:hover {
  background-color: #139487;
  color: #ffffff;
  border-color: #139487;
}

button.btn-close.qty_close {
  position: absolute;
  left: auto;
  right: 10px;
  top: 10px;
  z-index: 9999;
}

.svg_img.pro_svg {
  width: 18px;
  fill: #888888;
}

a.wishlist .svg_img.pro_svg {
  width: 16px;
}

.eccart-pro-items li .ec-pro-content .qty-plus-minus {
  width: 85px;
  height: 35px;
  margin-top: 7px;
  padding: 7px 0;
  border: 1px solid #eeeeee;
  display: inline-block;
  overflow: hidden;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  background: #ffffff;
  border-radius: 0;
  border-radius: 15px;
}
.eccart-pro-items li .ec-pro-content .qty-plus-minus .ec_qtybtn {
  width: 40px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100%;
  cursor: pointer;
  font-size: 20px;
  color: #777777;
}
.eccart-pro-items li .ec-pro-content .qty-plus-minus input.qty-input {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  color: #444444;
  float: left;
  font-size: 14px;
  height: auto;
  margin: 0;
  padding: 0;
  text-align: center;
  width: 32px;
  outline: none;
  font-weight: 400;
  line-height: 35px;
}
.eccart-pro-items li .ec-pro-content .qty-plus-minus .dec.ec_qtybtn {
  border-right: 1px solid #eeeeee;
}
.eccart-pro-items li .ec-pro-content .qty-plus-minus .inc.ec_qtybtn {
  border-left: 1px solid #eeeeee;
}

.ec-pro-loader {
  position: absolute;
  z-index: 99;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  opacity: 0;
  display: none;
  background: url(../images/common/pro-loader.gif) no-repeat scroll 50% 50%;
  background-color: rgba(255, 255, 255, 0.5);
  background-size: 75px;
}

.pro-loading .ec-pro-loader {
  opacity: 1;
  display: block;
}

i.ecicon.eci-star {
  color: #8c8c8c;
  float: left;
  font-size: 14px;
  margin-right: 3px;
}

i.ecicon.eci-star.fill {
  color: #f27d0c;
}

.ec-pro-option {
  display: none;
  width: 100%;
  position: absolute;
  top: auto;
  bottom: 0;
  background: #ffffff;
  height: 100%;
  left: 0;
  right: 0;
}

.ec-pro-opt-inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 100%;
  padding: 0 15px;
}

.ec-pro-color li {
  display: inline-block;
  border: 1px solid transparent;
  padding: 3px;
  border-radius: 100%;
  float: left;
  cursor: pointer;
}
.ec-pro-color li span {
  width: 16px;
  height: 16px;
  display: block;
  border-radius: 100%;
}
.ec-pro-color li a {
  pointer-events: none;
  width: 16px;
  height: 16px;
  display: block;
  cursor: pointer;
}
.ec-pro-color li:last-child {
  margin-right: 0;
}
.ec-pro-color li.active {
  border-color: #139487;
}

.ec-pro-size li {
  display: inline-block;
  float: left;
  cursor: pointer;
  margin-right: 5px;
}
.ec-pro-size li:last-child {
  margin-right: 0;
}
.ec-pro-size li a {
  pointer-events: none;
  min-width: 20px;
  padding: 0 4px;
  height: 20px;
  cursor: pointer;
  background-color: #ffffff;
  color: #777;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  font-size: 12px;
  font-weight: 400;
  border: 1px solid #eeeeee;
}
.ec-pro-size li.active a {
  border-color: #139487;
  background-color: #139487;
  color: #ffffff;
}

.tab-content .tab-pane {
  display: block;
  overflow: hidden;
  height: 0;
  visibility: hidden;
  max-width: 100%;
  opacity: 0;
}
.tab-content .tab-pane.active {
  height: auto;
  visibility: visible;
  opacity: 1;
  overflow: visible;
}

/*-------------------------------------------------
    Quick View Section
---------------------------------------------------*/
.quickview-pro-content .ec-quick-title a {
  color: #444444;
  font-size: 24px;
  text-transform: capitalize;
  margin: 0 0 15px 0;
  text-decoration: none;
  display: block;
  line-height: 1.5;
}
.quickview-pro-content p {
  font-size: 14px;
  color: #212121;
  margin: 0 0 12px;
  font-weight: 600;
}
.quickview-pro-content p span {
  font-weight: 400;
}
.quickview-pro-content .quickview-para {
  font-weight: 400;
  color: #444444;
  line-height: 26px;
}
.quickview-pro-content .ec-quickview-rating {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 15px;
}
.quickview-pro-content .ec-quickview-desc {
  margin-bottom: 10px;
  line-height: 24px;
  color: #777;
}
.quickview-pro-content .ec-quickview-price {
  padding: 5px 0 10px 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: left;
      -ms-flex-pack: left;
          justify-content: left;
}
.quickview-pro-content .ec-quickview-price span.old-price {
  font-size: 18px;
  margin-left: 10px;
  text-decoration: line-through;
  color: #777;
}
.quickview-pro-content .ec-quickview-price span.new-price {
  color: #222;
  font-weight: 700;
  font-size: 22px;
}
.quickview-pro-content .pro-details-list {
  padding: 0 0 30px 0;
  margin: 0 0 15px 0;
  border-bottom: 1px solid #eeeeee;
  display: inline-block;
  width: 100%;
  color: #444444;
}
.quickview-pro-content .pro-details-list .ec-quickview-desc {
  font-weight: 400;
  color: #444444;
  line-height: 24px;
  margin: 0;
}
.quickview-pro-content .pro-details-list li {
  display: block;
  width: 100%;
  line-height: 24px;
}
.quickview-pro-content .ec-quickview-qty {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin: 15px 0 0 0;
  width: 100%;
}
.quickview-pro-content .ec-quickview-qty .qty-plus-minus {
  border: 1px solid #eeeeee;
  display: inline-block;
  height: 40px;
  overflow: hidden;
  padding: 0;
  position: relative;
  width: 80px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  border-radius: 0;
}
.quickview-pro-content .ec-quickview-qty .qty-plus-minus .ec_qtybtn {
  width: 24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100%;
  cursor: pointer;
}
.quickview-pro-content .ec-quickview-qty .qty-plus-minus input.qty-input {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  color: #444444;
  float: left;
  font-size: 14px;
  height: 50px;
  margin: 0;
  padding: 0;
  text-align: center;
  width: 40px;
  outline: none;
}
.quickview-pro-content .ec-quickview-qty .ec-quickview-cart .btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 40px;
  line-height: 1;
  text-align: center;
  font-size: 16px;
  font-weight: 400;
  margin: 0 15px;
  text-transform: uppercase;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 0;
}
.quickview-pro-content .ec-quickview-qty .ec-quickview-cart .btn svg {
  margin-right: 8px;
}

/*-------------------------------------------------
    Services Section
---------------------------------------------------*/
.ec-services-section .ec_ser_block {
  margin: 0 auto;
  border: 1px solid #eeeeee;
  margin-top: 30px;
  padding: 15px 20px;
  background-color: #fff;
  border-radius: 30px;
}
.ec-services-section .ec_ser_content:not(:last-child) .ec_ser_inner {
  border-bottom: 1px solid #eeeeee;
}

.ec_ser_inner {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  cursor: pointer;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 15px 0;
}
.ec_ser_inner:hover .ec-service-image svg {
  fill: #222;
}
.ec_ser_inner .ec-service-image {
  margin-right: 20px;
  margin-left: 13px;
  min-width: 66px;
}
.ec_ser_inner .ec-service-image svg {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  width: 60px;
  height: 60px;
  fill: #139487;
}

.ec_ser_content_2 .ec_ser_inner .ec-service-image svg {
  width: 53px;
  height: 53px;
}

.ec_ser_content_3 .ec_ser_inner .ec-service-image svg {
  width: 40px;
  height: 40px;
}

.ec_ser_content_4 .ec_ser_inner .ec-service-image svg {
  width: 55px;
  height: 55px;
}

.ec_ser_content_5 .ec_ser_inner .ec-service-image svg {
  width: 66px;
  height: 66px;
}

.ec-service-desc h2, .ec-service-desc .h2 {
  font-size: 16px;
  color: #777777;
  letter-spacing: 0;
  margin-bottom: 9px;
  text-transform: capitalize;
  font-weight: 600;
}
.ec-service-desc p {
  font-size: 13px;
  color: #777;
  line-height: 18px;
  letter-spacing: 0;
}

/*-------------------------------------------------
    Special Section
---------------------------------------------------*/
.ec-spe-section .ec-spe-products {
  margin: 30px auto 0 auto;
  border: 1px solid #eeeeee;
  border-radius: 30px;
}
.ec-spe-section .ec-spe-pro-inner {
  padding: 30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  background-color: #fff;
  border-radius: 30px;
}
.ec-spe-section .ec-spe-pro-thumb .ec-spe-pro-slide {
  border: 1px solid #eeeeee;
  border-radius: 5px;
  overflow: hidden;
  margin: 11px auto;
  cursor: pointer;
  display: block !important;
}
.ec-spe-section .slick-arrow {
  top: -72px;
}

.ec-spe-pro-inner .ec-spe-pro-image {
  overflow: hidden;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.ec-spe-pro-inner .ec-spe-pro-image img {
  border-radius: 30px;
}
.ec-spe-pro-inner .ec-spe-pro-image .image img {
  border-radius: 30px;
  z-index: 1;
  max-width: 100%;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.ec-spe-pro-inner .ec-spe-pro-cover {
  width: calc(100% - 260px);
}
.ec-spe-pro-inner .ec-spe-pro-thumb {
  width: 152px;
  margin-left: 108px;
}
.ec-spe-pro-inner .ec-spe-pro-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding-left: 30px;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-price {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: left;
      -ms-flex-pack: left;
          justify-content: left;
  margin-bottom: 36px;
  line-height: 1.2;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-price span.new-price {
  color: #139487;
  font-weight: 700;
  font-size: 20px;
  letter-spacing: 0;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-price span.old-price {
  font-size: 20px;
  margin: 0 10px;
  text-decoration: line-through;
  color: #777;
  font-weight: 300;
  letter-spacing: 0;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-desc {
  font-size: 14px;
  color: #777;
  font-weight: 300;
  line-height: 2;
  letter-spacing: 0;
  margin-bottom: 20px;
  max-width: 76%;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-book {
  font-size: 18px;
  color: #444444;
  letter-spacing: 0.5px;
  margin-bottom: 11px;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-book span {
  color: #139487;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-btn {
  margin-bottom: 25px;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-btn a {
  height: 40px;
  line-height: 40px;
  padding-left: 10px;
  padding-right: 10px;
  font-weight: 600;
  min-width: 150px;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.7px;
  padding-top: 0;
  padding-bottom: 0;
  border-radius: 15px;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-progress-desc {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-bottom: 9px;
  padding: 0 7px;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-progress-desc span {
  font-size: 14px;
  font-weight: 400;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 0;
  position: relative;
  display: block;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  margin-bottom: 26px;
  max-width: 100%;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-progress .ec-spe-pro-progressbar {
  position: relative;
  border: 5px solid #f3f3f3;
  width: 100%;
  border-radius: 10px;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-progress .ec-spe-pro-progressbar:before {
  position: absolute;
  border: 2px solid #139487;
  width: 38%;
  border-radius: 10px;
  top: -2px;
  left: -2px;
  right: auto;
  content: "";
}
.ec-spe-pro-inner .ec-spe-pro-content .countdowntimer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}
.ec-spe-pro-inner .ec-spe-pro-content .ec-spe-count-desc {
  font-size: 14px;
  font-weight: 600;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 0;
  position: relative;
  display: block;
  margin-bottom: 15px;
}
.ec-spe-pro-inner .ec-spe-pro-title {
  margin: 0 0 7px;
}
.ec-spe-pro-inner .ec-spe-pro-title a {
  font-size: 14px;
  color: #222;
  letter-spacing: 0.1px;
  text-decoration: none;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  line-height: 1.5;
  text-transform: uppercase;
  font-weight: 700;
}
.ec-spe-pro-inner .ec-spe-pro-rating {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 16px;
  margin-bottom: 14px;
}
.ec-spe-pro-inner .ec-spe-pro-rating .ec-spe-rating-text {
  font-size: 16px;
  color: #777777;
}

.ec-spe-products .slick-arrow.slick-prev {
  right: 30px;
  left: auto;
}
.ec-spe-products .slick-arrow.slick-next {
  right: -10px;
  left: auto;
}

/*-------------------------------------------------
    Testimonial Section
---------------------------------------------------*/
.ec-test-outer {
  height: calc(100% - 83px);
  margin: 30px auto 0 auto;
  border: 1px solid #eeeeee;
  padding: 22px 15px;
  background-color: #fff;
  border-radius: 30px;
}

#ec-testimonial-slider {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  height: 100%;
}

.ec-test-inner .ec-test-img {
  text-align: center;
  margin-bottom: 26px;
}
.ec-test-inner .ec-test-img img {
  display: block;
  margin: 0 auto;
  border-radius: 100%;
  height: 80px;
  width: 80px;
}

.ec-test-section .ec-test-name {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 11px;
  color: #777777;
  letter-spacing: 0.8px;
  line-height: 1.2;
  text-transform: uppercase;
}
.ec-test-section .ec-test-designation {
  font-size: 14px;
  color: #444444;
  line-height: 1.2;
  letter-spacing: 0.6px;
  margin-bottom: 8px;
}
.ec-test-section .ec-test-desc {
  font-size: 14px;
  color: #777;
  line-height: 26px;
  letter-spacing: 0.7px;
  font-weight: 300;
  max-width: 90%;
  margin: 0 auto;
}
.ec-test-section .ec-test-divider {
  margin: 20px auto 11px;
}
.ec-test-section .ec-test-inner {
  text-align: center;
  margin: 0 auto;
  cursor: pointer;
}
.ec-test-section .slick-dots {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 22px auto 0;
}
.ec-test-section .slick-dots li {
  background-color: #e6e6e6;
  border: none;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
  -o-border-radius: 100%;
  display: inline-block;
  overflow: hidden;
  position: relative;
  cursor: pointer;
  width: 12px;
  height: 12px;
  margin: 0 6px;
}
.ec-test-section .slick-dots li.slick-active {
  background: #139487;
}

.svg_img.test_svg {
  width: 26px;
  height: auto;
  fill: #139487;
}

/*-------------------------------------------------
    Blog section css start
---------------------------------------------------*/
.ec-blog-section .owl-dots {
  display: none;
}

.ec-blog-inner {
  background-color: #fff;
}
.ec-blog-inner .ec-blog-image {
  margin-bottom: 15px;
}
.ec-blog-inner .ec-blog-image img {
  border-radius: 30px;
}
.ec-blog-inner .ec-blog-cat a {
  margin-bottom: 5px;
  color: #139487;
  font-size: 13px;
}
.ec-blog-inner .ec-blog-title {
  margin: 0 0 5px;
}
.ec-blog-inner .ec-blog-title a {
  color: #222;
  font-size: 16px;
  margin: 0 auto;
  text-decoration: none;
  display: block;
  font-weight: 600;
  line-height: 1.5;
  letter-spacing: 0;
  text-transform: capitalize;
}
.ec-blog-inner .ec-blog-title a:hover {
  color: #139487;
}
.ec-blog-inner .ec-blog-date {
  font-size: 14px;
  color: #777777;
  line-height: 1.4;
  letter-spacing: 0;
}
.ec-blog-inner .ec-blog-date span {
  padding: 0 5px;
  color: #555;
}
.ec-blog-inner .ec-blog-desc {
  margin-bottom: 13px;
  color: #777;
  font-size: 14px;
  letter-spacing: 0;
  word-break: break-all;
  line-height: 24px;
  font-family: "Montserrat";
}
.ec-blog-inner .ec-blog-btn a.btn {
  min-width: 130px;
  height: 40px;
  line-height: 40px;
  font-size: 15px;
}

/*-------------------------------------------------
    New Arrivals, Top Selling, Top Rated
---------------------------------------------------*/
.ec-all-product-content .slick-slide {
  margin-top: 15px;
}
.ec-all-product-content .slick-slide > div:not(:last-child) {
  margin-bottom: 15px;
}
.ec-all-product-content .slick-arrow {
  width: auto;
  top: -62px;
}
.ec-all-product-content .slick-arrow.slick-prev {
  left: auto;
  right: 30px;
}

.ec-all-product-inner {
  margin-right: 1px;
  padding: 15px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #fff;
  border: 1px solid #eeeeee;
  overflow: hidden;
  position: relative;
  border-radius: 30px;
}
.ec-all-product-inner .label {
  width: 11px;
  height: 11px;
  position: absolute;
  top: 7px;
  right: 7px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.ec-all-product-inner .label .dot {
  width: 8px;
  height: 8px;
  display: block;
  border-radius: 50%;
}
.ec-all-product-inner .veg .dot {
  background-color: #46c389;
}
.ec-all-product-inner .nonveg .dot {
  background-color: #ff9898;
}
.ec-all-product-inner .ec-pro-image-outer {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 70px;
          flex: 0 0 70px;
}
.ec-all-product-inner .ec-pro-image-outer .ec-pro-image {
  overflow: hidden;
  border-radius: 15px;
}
.ec-all-product-inner .ec-pro-content {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 calc(100% - 70px);
          flex: 0 0 calc(100% - 70px);
  width: calc(100% - 70px);
  padding-left: 15px;
}
.ec-all-product-inner .ec-pro-content .ec-pro-title {
  font-size: 16px;
  margin: 0 0 5px;
}
.ec-all-product-inner .ec-pro-content .ec-pro-title a {
  text-decoration: none;
  color: #202020;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  font-size: 14px;
  line-height: 1.2;
  font-weight: 600;
  letter-spacing: 0.2px;
  text-transform: capitalize;
}
.ec-all-product-inner .ec-pro-content .ec-pro-stitle {
  text-decoration: none;
  color: #777;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  font-size: 13px;
  line-height: 1.2;
  font-weight: 400;
  letter-spacing: 0.3px;
  text-transform: capitalize;
  margin-bottom: 5px;
}
.ec-all-product-inner .ec-pro-content .ec-pro-stitle a:hover {
  color: #139487;
}
.ec-all-product-inner .ec-pro-content .ec-price {
  font-size: 14px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #139487;
}
.ec-all-product-inner .ec-pro-content .ec-price span.new-price {
  color: #139487;
  font-weight: 700;
  font-size: 14px;
}
.ec-all-product-inner .ec-pro-content .ec-price span.old-price {
  font-size: 12px;
  text-decoration: line-through;
  color: #777;
  margin-left: 9px;
}
.ec-all-product-inner .ec-pro-content .ec-price span.qty {
  display: none;
  font-size: 12px;
  color: #777;
  margin-left: 9px;
}

/*-------------------------------------------------
    Popup Model Style
---------------------------------------------------*/
#ec-popnews-bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: none;
  z-index: 9998;
}

#ec-popnews-box {
  width: 100%;
  max-width: 700px;
  padding: 0;
  position: fixed;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  background-color: #fff;
  color: #444444;
  border: 0;
  display: none;
  z-index: 9999;
  text-align: center;
  border-radius: 30px;
  overflow: hidden;
}

#ec-popnews-close {
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  width: 30px;
  height: 30px;
  color: #fff;
  border-color: #139487;
  background-color: #139487;
  border-radius: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  font-size: 16px;
  line-height: 1;
}

#ec-popnews-box-content {
  height: 100%;
  padding: 30px 30px 30px 0px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

#ec-popnews-box h2, #ec-popnews-box .h2 {
  text-decoration: none;
  color: #444;
  display: block;
  font-size: 22px;
  line-height: 33px;
  font-weight: 600;
  margin: 0 auto 10px;
  letter-spacing: 0;
  text-transform: capitalize;
}

#ec-popnews-box p {
  margin-bottom: 20px;
  color: #777;
}
#ec-popnews-box form {
  margin-bottom: 0px;
}
#ec-popnews-box input {
  height: 45px;
  background-color: transparent;
  border: 1px solid #ededed;
  color: #444444;
  font-size: 14px;
  margin-bottom: 20px;
  padding: 0 15px;
  width: 100%;
  outline: none;
  background-color: #fff;
  border-radius: 30px;
}
#ec-popnews-box button {
  height: 40px;
  line-height: 42px;
  font-size: 16px;
  text-transform: uppercase;
  background-color: #222;
  border-radius: 30px;
}
#ec-popnews-box button:hover {
  background-color: #139487;
}

.modal-dialog {
  height: 100%;
  margin: 0% auto;
  max-width: 960px;
  width: 960px;
  padding: 35px;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.modal-dialog .modal-content {
  border-radius: 0;
}
.modal-dialog .modal-header {
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  padding: 10px 10px;
  border-bottom: 1px solid #eeeeee;
}
.modal-dialog .modal-header span {
  font-size: 24px;
  color: #444444;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.modal-dialog .modal-header span:hover {
  color: #555;
}
.modal-dialog .qty-nav-thumb {
  padding: 0 30px;
  margin-top: 20px;
}
.modal-dialog .qty-nav-thumb .slick-slide img {
  border: 1px solid transparent;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.modal-dialog .qty-nav-thumb .slick-slide:hover img {
  border-color: #555;
}
.modal-dialog .qty-nav-thumb .slick-slide.slick-current img {
  border-color: #139487;
}
.modal-dialog .qty-nav-thumb .slick-arrow {
  height: 100%;
  top: 0;
}
.modal-dialog .qty-slide {
  display: block !important;
  padding: 2px;
}

.modal.fade {
  display: block !important;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.modal.fade.show {
  display: block !important;
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.ec-nav-toolbar {
  display: none;
  background-color: #ffffff;
}

/*---- Recent purchase popup  ----*/
.recent-purchase {
  width: 300px;
  padding: 15px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: fixed;
  left: 15px;
  bottom: 15px;
  background-color: #ffffff;
  z-index: 12;
  -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
          box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.2);
  border-radius: 30px;
}

.recent-purchase img {
  width: 70px;
  height: 75px;
  margin-right: 15px;
  display: inline-block;
  border: 1px solid #eeeeee;
  border-radius: 15px;
}

.recent-purchase .detail {
  width: 65%;
  display: inline-block;
}

.recent-purchase .detail h6, .recent-purchase .detail .h6 {
  color: #444;
  font-size: 14px;
}

.recent-purchase .detail p {
  margin-bottom: 10px;
  font-size: 11px;
  color: #777;
}

.recent-purchase a {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  position: absolute;
  right: 10px;
  top: 0;
  font-size: 20px;
  color: #777;
}
.recent-purchase a:hover {
  color: #555;
}

/*-----------------------------------------------------------------------------------
    Responsive CSS
-----------------------------------------------------------------------------------*/
/*----- Responsive Media Query -----*/
@media only screen and (max-width: 1869px) {
  .ec-main-menu ul li .mega-menu li ul {
    width: 25%;
    margin-right: 5px;
  }

  .ec-category-desc h3, .ec-category-desc .h3 {
    font-size: 14px;
  }

  .ec-offer-content .ec-offer-title {
    font-size: 50px;
  }

  .ec-footer .footer-top .ec-footer-social .ec-footer-widget .ec-footer-links .ec-footer-link a {
    font-size: 14px;
  }
}
@media only screen and (max-width: 1699px) {
  .ec-btn-desc {
    margin-left: 7px;
  }

  .ec-slide-content .ec-slide-title {
    font-size: 50px;
  }
  .ec-slide-content .ec-slide-title span {
    font-size: 42px;
  }
  .ec-slide-content .ec-slide-stitle {
    font-size: 28px;
    letter-spacing: 8px;
  }

  .ec_cat_inner {
    padding: 15px;
  }

  .ec-category-desc .cat-show-all {
    font-size: 12px;
  }

  .banner-block .banner-content {
    padding: 20px 15px;
  }
}
@media only screen and (min-width: 1567px) {
  .ec-header-bottom .sticky-nav .nav-desk {
    padding-right: 30px;
    padding-left: 30px;
  }
  .ec-header-bottom .sticky-nav .nav-desk .ec-main-menu ul li.dropdown:not(:last-child) {
    margin-right: 0;
  }
}
@media only screen and (min-width: 1500px) and (max-width: 1566px) {
  .ec-header-bottom .sticky-nav .nav-desk {
    padding-right: 0;
    padding-left: 0;
  }
  .ec-header-bottom .sticky-nav .nav-desk .ec-main-menu ul li.dropdown:not(:last-child) {
    margin-right: 0;
  }
}
@media only screen and (max-width: 1499px) {
  .banner-block {
    min-height: 435px;
  }

  div#ec-main-menu-desk .position-relative {
    width: 100%;
  }

  .ec-main-menu {
    width: 100%;
  }

  .ec-header-search {
    margin: 0 auto;
  }

  .ec-category-menu .ec-category-toggle .ec-category-title {
    font-size: 13px;
    padding: 0 10px;
  }

  .ec-slide-content .ec-slide-title {
    font-size: 45px;
  }
  .ec-slide-content .ec-slide-title span {
    font-size: 30px;
  }
  .ec-slide-content .ec-slide-stitle {
    font-size: 24px;
    letter-spacing: 5px;
  }
  .ec-slide-content .btn {
    padding: 0 15px;
    height: 40px;
    line-height: 40px;
  }

  .ec-category-desc {
    padding-left: 15px;
  }
  .ec-category-desc li {
    margin-bottom: 10px;
  }
  .ec-category-desc li a {
    font-size: 12px;
  }
  .ec-category-desc .cat-show-all i {
    font-size: 14px;
  }

  .ec_ser_inner {
    padding: 11px 0;
  }
  .ec_ser_inner .ec-service-image {
    margin-right: 10px;
    margin-left: 5px;
    min-width: 50px;
  }
  .ec_ser_inner .ec-service-image svg {
    width: 44px;
    height: 44px;
  }

  .ec_ser_content_5 .ec_ser_inner .ec-service-image svg {
    width: 40px;
    height: 40px;
  }

  .ec_ser_content_4 .ec_ser_inner .ec-service-image svg {
    width: 40px;
    height: 40px;
  }

  .ec_ser_content_3 .ec_ser_inner .ec-service-image svg {
    width: 40px;
    height: 40px;
  }

  .ec_ser_content_2 .ec_ser_inner .ec-service-image svg {
    width: 40px;
    height: 40px;
  }

  .ec-service-desc h2, .ec-service-desc .h2 {
    font-size: 14px;
  }

  .banner-block .banner-text {
    margin-bottom: 10px;
  }
  .banner-block .banner-text .ec-banner-disc {
    font-size: 13px;
    margin-bottom: 10px;
  }
  .banner-block .banner-text .ec-banner-title {
    font-size: 20px;
  }
  .banner-block .banner-content .ec-banner-btn a {
    font-size: 14px;
  }

  .ec-offer-content .ec-offer-stitle {
    font-size: 22px;
  }
  .ec-offer-content .ec-offer-title {
    font-size: 40px;
  }
  .ec-offer-content .ec-offer-btn a {
    font-size: 16px;
    padding: 0 15px;
    height: 40px;
    line-height: 40px;
  }
  .ec-offer-content .ec-offer-desc {
    font-size: 17px;
  }

  .ec-spe-pro-inner .ec-spe-pro-thumb {
    width: 85px;
    margin-left: 15px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  .ec-spe-pro-inner .ec-spe-pro-cover {
    width: calc(100% - 100px);
  }
  .ec-spe-pro-inner .ec-spe-pro-content {
    padding-left: 20px;
  }
  .ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-desc {
    line-height: 1.5;
    margin-bottom: 10px;
    max-width: 100%;
  }
  .ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-btn {
    margin-bottom: 15px;
  }
  .ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-progress {
    margin-bottom: 15px;
  }
  .ec-spe-pro-inner .ec-spe-pro-content .ec-spe-price {
    margin-bottom: 15px;
  }

  .displaySection {
    margin-right: 18px;
    padding: 5px;
    min-width: 55px;
  }

  .numberDisplay {
    font-size: 16px;
  }

  .timerDisplay > span.displaySection:not(:last-child):before {
    right: -14px;
    top: 18%;
  }

  .ec-spe-section .ec-spe-products {
    min-height: 406px;
  }

  .ec-test-outer {
    height: unset;
  }

  .ec-footer .footer-top .col-sm-12.ec-footer-cont-social {
    width: 24%;
  }
  .ec-footer .footer-top .col-sm-12 {
    width: 19%;
  }
  .ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link {
    font-size: 14px;
  }
  .ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link a {
    font-size: 14px;
  }
  .ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link:not(:last-child) {
    margin-bottom: 11px;
  }
  .ec-footer .footer-top .ec-footer-widget .ec-footer-heading {
    font-size: 14px;
  }

  .ec-foo-call .svg_img.foo_svg {
    height: 22px;
  }

  .svg_img.foo_svg {
    height: 22px;
  }

  .footer-bottom .ec-copy {
    letter-spacing: 1.2px;
  }

  .ec-subscribe-form .button {
    font-size: 16px;
    height: 44px;
    line-height: 44px;
    min-width: auto;
    width: auto;
    padding: 0 15px;
  }
}
@media only screen and (max-width: 1399px) {
  .ec-pro-tab-nav .nav-item:not(:last-child) {
    margin-right: 30px;
  }

  .tab-content .tab-pane .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
@media only screen and (max-width: 1366px) {
  .section-space-p {
    padding: 35px 0;
  }

  .section-space {
    padding: 35px 0;
  }

  .section-space-pb {
    padding-bottom: 35px;
  }

  .section-space-pb-30 {
    padding-bottom: 30px;
  }

  .section-space-pt {
    padding-top: 35px;
  }

  .section-space-ptb-100 {
    padding: 70px 0;
  }

  .section-space-m {
    margin: 35px 0;
  }

  .section-space-mt {
    margin-top: 35px;
  }

  .section-space-mb {
    margin-bottom: 35px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1449px) {
  .pt-100px {
    padding-top: 80px;
  }

  .pt-70px {
    padding-top: 55px;
  }

  .pb-70px {
    padding-bottom: 55px;
  }

  .pt-86px {
    padding-top: 76px;
  }

  .pt-60px {
    padding-top: 50px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1265px) {
  .ec-product-content .ec-opt-size li {
    margin-right: 4px;
  }
}
@media only screen and (max-width: 1199px) {
  .ec-main-menu ul li {
    margin-left: 15px;
    margin-right: 15px;
  }

  .section-title .ec-title {
    font-size: 18px;
  }

  .col-5 {
    width: 25%;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
  }

  .d-1199 {
    display: none !important;
  }

  .ec-all-product-inner .ec-pro-content .ec-price span.qty {
    font-size: 11px;
    position: absolute;
    right: 10px;
  }

  .col.ec-category-block {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 10%;
            flex: 0 0 10%;
  }

  div#ec-main-menu-desk {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 90%;
            flex: 0 0 90%;
  }

  .header-search {
    min-width: 450px;
  }

  .ec-category-menu .ec-category-toggle {
    width: 45px;
  }

  .ec-header-search {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
  }

  .col.text-center.header-top-center {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 10%;
    flex: 1 0 10%;
  }

  .search_submit {
    width: 50px;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
  }
  .search_submit .search_svg {
    width: 18px;
    height: 18px;
  }

  .ec-slide-content .ec-slide-title {
    font-size: 42px;
    padding-bottom: 10px;
  }
  .ec-slide-content .ec-slide-title span {
    font-size: 22px;
    letter-spacing: 2px;
  }
  .ec-slide-content .ec-slide-stitle {
    font-size: 26px;
    letter-spacing: 3px;
  }
  .ec-slide-content p {
    font-size: 22px;
    margin-right: 50px;
  }
  .ec-slide-content p b {
    font-size: 30px;
  }
  .ec-slide-content .btn {
    font-size: 14px;
    height: 34px;
    line-height: 34px;
  }

  .ec-category-desc h3, .ec-category-desc .h3 {
    font-size: 12px;
  }

  .ec_ser_inner {
    padding: 15px 0;
  }
  .ec_ser_inner .ec-service-image {
    min-width: 34px;
  }
  .ec_ser_inner .ec-service-image svg {
    width: 34px;
    height: 34px;
  }

  .ec_ser_content_5 .ec_ser_inner .ec-service-image svg {
    width: 34px;
    height: 34px;
  }

  .ec_ser_content_4 .ec_ser_inner .ec-service-image svg {
    width: 34px;
    height: 34px;
  }

  .ec_ser_content_3 .ec_ser_inner .ec-service-image svg {
    width: 34px;
    height: 34px;
  }

  .ec_ser_content_2 .ec_ser_inner .ec-service-image svg {
    width: 34px;
    height: 34px;
  }

  .ec-service-desc p {
    font-size: 12px;
  }

  .banner-block .banner-content {
    padding: 15px;
  }
  .banner-block .banner-content .ec-banner-btn a {
    font-size: 14px;
  }
  .banner-block .banner-content .ec-banner-btn a i {
    font-size: 14px;
  }
  .banner-block .banner-text {
    margin-bottom: 5px;
  }
  .banner-block .banner-text .ec-banner-disc {
    font-size: 12px;
    margin-bottom: 5px;
    padding: 2px 8px;
  }
  .banner-block .banner-text .ec-banner-stitle {
    font-size: 14px;
  }
  .banner-block .banner-text .ec-banner-title {
    font-size: 16px;
    margin-bottom: 5px;
  }

  .ec-offer-content .ec-offer-desc {
    font-size: 18px;
  }
  .ec-offer-content .ec-offer-btn a {
    font-size: 14px;
  }

  .ec-spe-pro-inner .ec-spe-pro-content {
    padding-left: 15px;
  }
  .ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-btn a {
    height: 34px;
    line-height: 34px;
    min-width: unset;
    font-size: 12px;
  }
  .ec-spe-pro-inner .ec-spe-pro-content .ec-spe-pro-progress-desc span {
    font-size: 12px;
  }
  .ec-spe-pro-inner .ec-spe-pro-content .ec-spe-count-desc {
    font-size: 12px;
    margin-bottom: 10px;
  }

  .displaySection {
    min-width: 45px;
  }

  .numberDisplay {
    margin-bottom: 5px;
  }

  .labelformat {
    font-size: 10px;
  }

  section.ec-new-product {
    margin-top: 40px;
  }

  .footer-news-title {
    font-size: 28px;
    margin-bottom: 10px;
  }

  .footer-bottom .ec-copy {
    font-size: 14px;
  }

  .footer-bottom-payment {
    margin-bottom: 15px;
  }

  .ec-test-section, .ec-new-product-content {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .ec-test-section {
    width: 50%;
  }

  .ec-services-section {
    width: 100%;
  }

  .ec-spe-section {
    width: 100%;
  }

  .ec-services-section .ec_ser_block {
    padding: 15px 15px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }
  .ec-services-section .ec_ser_content:not(:last-child) .ec_ser_inner {
    border: none;
  }

  .ec_ser_content.col-sm-12 {
    width: 20%;
  }

  .ec_ser_inner {
    text-align: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  .ec_ser_inner .ec-service-image {
    margin-right: 0;
    margin-bottom: 10px;
  }

  .ec-banner-inner {
    margin-bottom: 30px;
  }

  .banner-block {
    min-height: 405px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .pt-100px {
    padding-top: 70px;
  }

  .pt-70px {
    padding-top: 40px;
  }

  .pb-70px {
    padding-bottom: 40px;
  }

  .pt-86px {
    padding-top: 66px;
  }

  .pt-60px {
    padding-top: 40px;
  }

  .col-lg-3.ec-product-content {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 33.3333333333%;
  }

  .ec-product-tab .tab-pane > .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
@media only screen and (min-width: 992px) {
  .ec-header-bottom .menu_fixed .nav-desk {
    padding-right: 30px;
    padding-left: 30px;
  }
  .ec-header-bottom .menu_fixed .nav-desk .ec-main-menu ul li.dropdown:not(:last-child) {
    margin-right: 0;
  }

  .ec-footer-links.ec-footer-dropdown {
    display: block !important;
  }
}
@media only screen and (max-width: 991px) {
  .section-space-p {
    padding: 35px 0;
  }

  .section-space {
    padding: 35px 0;
  }

  .section-space-pb {
    padding-bottom: 35px;
  }

  .section-space-pt {
    padding-top: 35px;
  }

  .section-space-ptb-100 {
    padding: 70px 0;
  }

  .section-space-m {
    margin: 35px 0;
  }

  .section-space-mt {
    margin-top: 35px;
  }

  .margin-b-30 {
    margin-bottom: 30px;
  }

  .section-space-mb {
    margin-bottom: 35px;
  }

  .marg-b-0 {
    margin-bottom: 0 !important;
  }

  .ec-header {
    z-index: auto;
  }

  .ec-slide-content {
    padding-left: 50px;
  }

  .ec-ofr-bnr {
    height: 60vh;
  }

  .sidebar-dis-991 {
    font-size: 14px;
    font-weight: 400;
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    right: auto;
    display: block;
    width: 350px;
    height: 100%;
    padding: 30px;
    -webkit-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    background-color: #ffffff;
    -webkit-box-shadow: none;
    box-shadow: none;
    overflow: auto;
    opacity: 1;
  }

  .ec-product-tab .ec-sidebar-block h3, .ec-product-tab .ec-sidebar-block .h3 {
    position: relative;
  }
  .ec-product-tab .ec-sidebar-block h3 .ec-close, .ec-product-tab .ec-sidebar-block .h3 .ec-close {
    padding: 0;
    position: absolute;
    right: -3px;
    display: inline-block !important;
    font-size: 30px;
    color: #222;
  }

  .ec-product-tab .cat-sidebar .cat-sidebar-box .ec-sidebar-wrap {
    padding: 0;
    border: none;
  }

  .sidebar-dis-991.ec-open {
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }

  .col-5 {
    width: 33.3333%;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.3333%;
    flex: 0 0 33.3333%;
  }

  .slide-1, .slide-2, .slide-3 {
    height: 55vh;
  }

  .col.ec-category-block {
    margin-bottom: 20px;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 23%;
            flex: 0 0 23%;
  }

  .banner-block {
    min-height: 420px;
  }

  .ec-header-search {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
  }

  .header-search {
    padding: 0;
  }

  .ec-pro-tab-nav .nav-item {
    font-size: 13px;
    font-weight: 600;
  }

  .ec-category-menu .ec-category-toggle {
    width: 100%;
  }

  .ec-category-dropdown {
    left: auto;
    right: 0;
  }

  .section-title .ec-title {
    font-size: 17px;
  }

  .header-top .row {
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }

  .ec-sidebar-toggle {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 0px;
            flex: 0 0 0;
  }

  .ec-header-bottom {
    padding: 20px 0;
  }

  .ec-main-slider {
    margin-top: 30px;
  }

  .ec-header-bottons .ec-header-btn {
    margin-left: 15px;
    padding: 0;
    color: #ffffff;
  }
  .ec-header-bottons .ec-header-btn .ec-header-btn.ec-header-wishlist {
    padding-bottom: 0;
    padding-right: 8px;
    margin-left: 34px;
  }
  .ec-header-bottons .ec-header-btn:not(:last-child) {
    margin-left: 15px;
    padding: 0 2px;
  }
  .ec-header-bottons .ec-header-btn .ec-header-count {
    height: 16px;
    min-width: 16px;
    top: -5px;
    right: -6px;
    position: absolute;
    left: auto;
    background-color: #139487;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    font-size: 12px;
    line-height: 16px;
    border-radius: 8px;
  }
  .ec-header-bottons .ec-header-btn:last-child {
    padding-right: 0;
  }

  .ec_cat_inner .ec-category-image {
    padding: 40px;
  }

  .header_svg {
    width: 25px;
    height: 25px;
    fill: #444;
  }

  .ec-header-user .header_svg {
    width: 25px;
    height: 25px;
  }
  .ec-header-user .dropdown-menu {
    top: 46px !important;
  }

  .ec-header-wishlist .header_svg {
    width: 25px;
    height: 25px;
  }

  .header-top-left {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
  }

  .header-top-message {
    font-size: 12px;
  }

  .ec-category-dropdown .ec-cat-menu-link {
    padding: 10px 15px;
    font-size: 12px;
  }

  .col.ec-header-logo {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    margin-top: 5px;
    margin-bottom: 20px;
  }

  .ec-header-call {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    margin-bottom: 20px;
  }
  .ec-header-call .ec-call-title {
    font-size: 14px;
  }
  .ec-header-call .ec-call-no {
    font-size: 14px;
  }

  .ec-category-menu .ec-category-toggle {
    min-height: 46px;
    -webkit-box-pack: start;
        -ms-flex-pack: start;
            justify-content: flex-start;
    padding: 0 15px;
  }

  .header-search {
    max-width: 100%;
  }
  .header-search .form-control {
    min-height: 42px;
    height: 42px;
  }

  .search_submit {
    height: 42px;
  }

  .ec-search-select-inner {
    height: 44px;
    font-size: 12px;
  }
  .ec-search-select-inner::before {
    top: 5px;
    height: 34px;
  }

  .header-logo {
    text-align: left;
  }

  .call_svg {
    width: 30px;
    height: 30px;
  }

  .header-res-social {
    margin-bottom: 20px;
    text-align: center;
  }

  .header-top-social ul li.list-inline-item:not(:last-child) {
    margin-right: 5px;
  }
  .header-top-social ul li a {
    width: 40px;
    height: 40px;
    font-size: 20px;
    font-size: 20px;
  }
  .header-top-social ul li a i {
    color: #222;
  }

  .ec-menu-inner {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    height: 100%;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }

  .header-res-lan-curr {
    margin-top: 30px;
    margin-bottom: 20px;
  }

  .header-top-lan-curr .dropdown .dropdown-toggle {
    padding: 0;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    width: 100%;
    padding-bottom: 10px;
    color: #222;
    font-weight: 600;
  }
  .header-top-lan-curr .dropdown .dropdown-toggle::after {
    display: none;
  }
  .header-top-lan-curr .dropdown .dropdown-toggle i {
    margin-left: 15px;
    color: #222;
  }
  .header-top-lan-curr .dropdown .dropdown-menu {
    top: 0 !important;
    position: relative !important;
  }
  .header-top-lan-curr > * {
    width: 100%;
    margin-bottom: 10px;
  }

  .header-top-center {
    text-align: left !important;
  }

  .ec-slide-content .ec-slide-title {
    font-size: 38px;
  }
  .ec-slide-content .ec-slide-title span {
    font-size: 18px;
    letter-spacing: 1px;
  }
  .ec-slide-content .ec-slide-title:before {
    height: 4px;
    bottom: 3px;
    width: 100px;
  }
  .ec-slide-content .ec-slide-stitle {
    font-size: 20px;
  }
  .ec-slide-content p {
    font-size: 18px;
    margin-right: 25px;
  }
  .ec-slide-content .btn {
    font-size: 12px;
    height: 34px;
    line-height: 34px;
  }
  .ec-slide-content .btn i {
    font-size: 15px;
  }

  .ec-main-slider .swiper-container-horizontal > .swiper-pagination-bullets {
    bottom: 10px;
  }

  .main-slider-dot .swiper-pagination-bullet {
    width: 14px;
    height: 14px;
  }
  .main-slider-dot .swiper-pagination-bullet.swiper-pagination-bullet-active {
    width: 28px;
  }

  .ec-service-desc h2, .ec-service-desc .h2 {
    font-size: 13px;
  }

  .banner-block .banner-text .ec-banner-disc {
    font-size: 10px;
    padding: 0px 8px;
  }
  .banner-block .banner-text .ec-banner-stitle {
    font-size: 12px;
    margin-bottom: 2px;
  }
  .banner-block .banner-text .ec-banner-title {
    text-align: center;
  }
  .banner-block .banner-content {
    padding: 10px;
  }
  .banner-block .banner-content .ec-banner-btn a {
    font-size: 14px;
    font-size: 12px;
  }

  .ec-test-section, .ec-new-product-content {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%;
  }

  .ec-test-section {
    display: block;
    margin-bottom: 30px;
  }

  .ec-product-content {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 50%;
  }

  .ec-product-tab .tab-pane > .row {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }

  .ec-spe-section .ec-spe-products {
    min-height: unset;
  }

  .ec-test-section .ec-test-desc {
    line-height: 1.5;
  }

  .footer-news-desc {
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 10px;
  }

  .ec-footer .footer-top .container > .row {
    padding: 0;
  }
  .ec-footer .footer-top .col-sm-12 {
    margin-bottom: 0;
  }
  .ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link:not(:last-child) {
    margin-bottom: 15px;
  }
  .ec-footer .footer-top .ec-footer-widget .ec-footer-heading {
    margin-bottom: 15px;
  }
  .ec-footer .footer-top .col-sm-12.col-lg-3 {
    width: 100%;
    margin-bottom: 5px;
  }
  .ec-footer .footer-top .col-sm-12.col-lg-3.ec-footer-contact {
    width: 100%;
    margin-bottom: 5px;
  }
  .ec-footer .footer-top .ec-footer-contact .ec-footer-widget .ec-footer-heading {
    margin-bottom: 15px;
  }

  .ec-footer-contact {
    margin-bottom: 0;
  }

  .footer-news-title {
    font-size: 20px;
  }

  .ec-subscribe-form {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58%;
            flex: 0 0 58%;
  }

  .ec-heading-res {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    margin: 0 auto;
    width: 100%;
    height: 100%;
    display: block;
    text-align: right;
    padding-right: 10px;
  }

  .ec-footer-links.ec-footer-dropdown {
    display: none;
    padding: 0 0 15px 0;
  }

  .footer-bottom-copy {
    text-align: center;
  }

  .footer-bottom .col {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 100%;
            flex: 1 0 100%;
  }

  .col.footer-bottom-right {
    margin: 15px auto;
  }

  .footer-bottom-payment.d-flex.justify-content-end {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }

  .ec-footer .footer-top .ec-footer-social ul {
    margin-top: 15px;
  }

  .ec-footer .footer-top .ec-footer-widget .s-head {
    display: block;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .pt-100px {
    padding-top: 50px;
  }

  .pt-70px {
    padding-top: 30px;
  }

  .pb-70px {
    padding-bottom: 30px;
  }

  .pt-86px {
    padding-top: 46px;
  }

  .pt-60px {
    padding-top: 30px;
  }

  .modal-dialog {
    max-width: 720px;
    width: 720px;
  }
}
@media only screen and (max-width: 767px) {
  .section-space-p {
    padding: 25px 0;
  }

  .section-space {
    padding: 25px 0;
  }

  .section-space-pb {
    padding-bottom: 25px;
  }

  .section-space-pt {
    padding-top: 25px;
  }

  .section-space-ptb-100 {
    padding: 50px 0;
  }

  .section-space-m {
    margin: 25px 0;
  }

  .section-space-mt {
    margin-top: 25px;
  }

  .section-space-footer-p {
    padding: 30px 0;
  }

  .section-space-mb {
    margin-bottom: 25px;
  }

  .ec-test-section {
    margin-bottom: 0;
  }

  .col-5 {
    width: 50%;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
  }

  .ec-test-section, .ec-new-product-content {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%;
  }

  .ec-slide-content {
    width: 70%;
  }

  .ec-all-product-content .slick-arrow:before {
    font-size: 22px;
  }

  #ec-popnews-box-content {
    padding: 30px;
  }

  .col-sm-12.ec-all-product-block {
    padding: 0 8px;
  }

  .ec-ofr-bnr {
    height: 50vh;
  }

  .slide-1, .slide-2, .slide-3 {
    height: 40vh;
  }

  .header-logo a img {
    width: 130px;
  }

  .ec_cat_inner .ec-category-image {
    padding: 30px;
  }

  .section-title .ec-title {
    font-size: 16px;
  }

  .col.text-center.header-top-center {
    width: 60%;
  }

  .header-search .form-control {
    padding: 6px 10px;
    width: 100%;
  }

  .ec-search-select-inner {
    width: 110px;
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
  }
  .ec-search-select-inner select {
    padding: 0 10px;
  }
  .ec-search-select-inner::after {
    right: 15px;
  }

  .col.ec-category-block {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 35%;
  }

  .ec-header-search {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    margin: 0;
    width: 100%;
  }

  .header-search {
    width: 100%;
    min-width: 290px;
  }

  .ec-category-dropdown .ec-cat-menu-link {
    padding: 15px 10px;
    line-height: 1;
  }

  .ec-slide-content {
    padding-left: 35px;
  }
  .ec-slide-content .ec-slide-stitle {
    font-size: 18px;
    letter-spacing: 2px;
  }
  .ec-slide-content p {
    font-size: 14px;
  }
  .ec-slide-content p b {
    font-size: 24px;
  }
  .ec-slide-content .ec-slide-title {
    padding-bottom: 0;
    font-size: 30px;
  }
  .ec-slide-content .ec-slide-title span {
    font-size: 16px;
    letter-spacing: 0;
  }
  .ec-slide-content .btn {
    margin-top: 0;
    height: 30px;
    line-height: 30px;
    font-size: 10px;
    padding: 0 15px;
  }
  .ec-slide-content .btn i {
    font-size: 13px;
  }

  .ec-main-slider .swiper-container-horizontal > .swiper-pagination-bullets {
    bottom: 5px;
  }

  .ec-service-desc h2, .ec-service-desc .h2 {
    font-size: 14px;
  }

  .ec_ser_content.col-sm-12 {
    width: auto;
    padding: 0 10px;
    min-width: 208px;
    margin: 5px auto;
  }

  .ec_ser_inner {
    text-align: left;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
  .ec_ser_inner .ec-service-image {
    margin-right: 15px;
    margin-left: 0;
    margin-bottom: 10px;
  }

  .ec-services-section .ec_ser_block {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
            justify-content: space-evenly;
  }

  .ec-banner-inner {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    margin: 30px auto;
  }

  .banner-block {
    margin: 10px auto;
  }
  .banner-block .banner-content {
    padding: 35px 15px;
  }
  .banner-block .banner-content .ec-banner-btn a {
    font-size: 16px;
  }
  .banner-block .banner-text .ec-banner-stitle {
    font-size: 16px;
  }
  .banner-block .banner-text .ec-banner-title {
    font-size: 24px;
  }
  .banner-block .banner-text .ec-banner-disc {
    font-size: 14px;
    padding: 5px 8px;
  }

  .ec-pro-tab-nav {
    -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
            justify-content: center !important;
  }
  .ec-pro-tab-nav .nav-item {
    font-size: 12px;
    letter-spacing: 0;
  }

  .ec-pro-tab {
    margin-top: 0;
  }

  .slick-dots li {
    width: 14px;
    height: 14px;
  }
  .slick-dots li.slick-active {
    width: 28px;
  }

  .ec-spe-section .ec-spe-pro-inner {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }

  .ec-spe-pro-image-outer {
    width: 70%;
  }

  .ec-spe-pro-inner .ec-spe-pro-content {
    width: 100%;
    padding: 30px 0 0 0;
  }
  .ec-spe-pro-inner .ec-spe-pro-thumb {
    width: 60px;
  }
  .ec-spe-pro-inner .ec-spe-pro-cover {
    width: calc(100% - 75px);
  }

  section.ec-test-section {
    margin-top: 25px;
  }

  .ec-test-section .slick-dots li {
    width: 12px;
  }
  .ec-test-section .ec-test-desc {
    max-width: 70%;
  }

  .ec-new-product .slick-initialized .slick-slide {
    text-align: center;
  }

  .ec-brand-area {
    padding-left: 15px;
    padding-right: 15px;
  }

  .footer-news-desc {
    max-width: 100%;
  }

  .ec-subscribe-form .button {
    font-size: 14px;
    height: 40px;
    line-height: 40px;
  }

  .ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link:not(:last-child) {
    margin-bottom: 10px;
  }

  .modal-dialog {
    width: 80%;
    height: auto;
    max-width: 100%;
    padding: 35px 0;
    margin: 0 auto;
  }
  .modal-dialog .qty-nav-thumb {
    max-width: 420px;
    margin: 0 auto;
  }
  .modal-dialog .qty-product-cover {
    max-width: 420px;
    margin: 0 auto;
    margin-bottom: 15px;
  }
  .modal-dialog .quickview-pro-content {
    margin-top: 20px;
  }

  button.btn-close.qty_close {
    right: 5px;
    top: 5px;
    width: 10px;
    height: 10px;
  }

  #ec-popnews-box {
    width: 90%;
    max-width: 600px;
  }
  #ec-popnews-box h1, #ec-popnews-box .h1 {
    font-size: 30px;
  }

  .ec-insta-inner img {
    width: 200px;
  }

  .ec-cc-style .cc-footer .cc-call-button svg {
    stroke: #fff;
  }

  .ec-cc-style .cc-footer .cc-call-button:before {
    width: 100%;
  }
  .ec-cc-style .cc-footer .cc-call-button span {
    color: #fff;
  }

  .ec-brand-outer .slick-arrow.slick-next,
.ec-brand-outer .slick-arrow.slick-prev {
    display: none !important;
  }

  .disp-no-767 {
    display: none;
  }
}
@media only screen and (max-width: 400px) {
  .ec_cat_inner {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
            flex-direction: row !important;
  }
  .ec_cat_inner .ec-category-desc {
    padding-left: 15px !important;
  }
  .ec_cat_inner .ec-category-image {
    margin-bottom: 0;
  }
}
@media only screen and (max-width: 575px) {
  .ec-main-slider .ec-slide-content {
    background: rgba(255, 255, 255, 0.7);
    padding: 15px;
    border-radius: 15px;
  }
  .ec-main-slider .slide-1, .ec-main-slider .slide-2, .ec-main-slider .slide-3 {
    background-position: right;
  }

  .header-logo {
    text-align: center !important;
    margin-bottom: 15px;
  }
  .header-logo a img {
    width: 120px;
  }

  .banner-block {
    min-height: 300px;
  }

  .recent-purchase {
    bottom: 75px;
    z-index: 16;
  }

  .ec-header-bottom .col {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 100%;
    flex: 1 0 100%;
  }

  .banner-block .banner-content {
    width: 70%;
  }

  .ec-nav-toolbar {
    height: 60px;
    padding: 5px;
    -webkit-box-shadow: 0 0 5px rgba(61, 61, 61, 0.2);
    box-shadow: 0 0 5px rgba(61, 61, 61, 0.2);
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 14;
    overflow-y: hidden;
  }
  .ec-nav-toolbar .ec-nav-panel {
    width: 100%;
    height: 100%;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }
  .ec-nav-toolbar .ec-nav-panel .ec-nav-panel-icons {
    width: 30px;
  }
  .ec-nav-toolbar .ec-nav-panel .ec-nav-panel-icons a {
    position: relative;
  }
  .ec-nav-toolbar .ec-nav-panel .ec-nav-panel-icons a .header_svg {
    width: 25px;
    height: 25px;
    fill: #222;
  }
  .ec-nav-toolbar .ec-nav-panel .ec-nav-panel-icons a .ec-cart-noti {
    width: 15px;
    height: 15px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    position: absolute;
    top: -8px;
    right: -10px;
    border-radius: 30px;
    color: #fff;
    font-size: 12px;
    background-color: #ff6767;
  }

  #scrollUp, .cc-right-bottom {
    bottom: 75px;
  }

  .footer-bottom .container {
    margin-bottom: 55px;
  }

  .ec-header-bottom {
    padding: 20px 0 10px;
  }

  .ec-product-content {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: 100%;
    max-width: 350px;
    margin: 0 auto;
  }

  .ec-ofr-bnr {
    height: 36vh;
  }

  .ec-insta-inner img {
    width: 150px;
  }

  .ec-cc-style .cc-panel {
    width: 290px;
  }

  .displaySection {
    margin-right: 5px;
  }
}
@media only screen and (max-width: 574px) {
  .ec-insta-outer {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
}
@media only screen and (min-width: 480px) and (max-width: 574px) {
  .ec-product-inner .ec-pro-content .ec-pro-rat-price {
    padding: 0 10px;
  }
  .ec-product-inner .ec-pro-content .ec-pro-title {
    padding: 0 10px;
  }
  .ec-product-inner .ec-pro-content .ec-pro-stitle {
    padding: 0 10px;
  }
  .ec-product-inner .ec-pro-content .ec-price span.old-price {
    font-size: 12px;
  }
  .ec-product-inner .ec-pro-content .ec-price span.new-price {
    font-size: 12px;
  }
  .ec-product-inner .ec-pro-image .flags span {
    font-size: 12px;
    line-height: 14px;
  }
  .ec-product-inner .ec-pro-image .ec-pro-actions .ec-btn-group {
    width: 34px;
    height: 34px;
  }

  .ec-pro-opt-inner {
    padding: 0 10px;
  }

  .ec-pro-size li:not(:last-child) {
    margin-right: 5px;
  }
  .ec-pro-size li a {
    font-size: 10px;
    width: 18px;
    height: 18px;
  }

  .ec-pro-color li span {
    width: 12px;
    height: 12px;
  }
  .ec-pro-color li a {
    width: 12px;
    height: 12px;
  }

  a.wishlist .svg_img.pro_svg {
    height: 17px;
  }

  .svg_img.pro_svg {
    height: 19px;
  }
}
@media only screen and (max-width: 479px) {
  .col-5 {
    width: 100%;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
  }

  .section-title {
    padding-bottom: 10px;
  }

  .ec-slide-content {
    width: 100%;
    padding-left: 15px;
  }

  .slide-1, .slide-2, .slide-3 {
    height: 35vh;
  }

  .col.text-center.header-top-center {
    display: none;
  }

  .header-top-left {
    display: none;
  }

  .ec-search-select-inner select {
    padding: 0 5px;
  }

  .col.ec-category-block {
    width: 45px;
    -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
            order: 4;
    margin-top: 15px;
  }

  .ec-header-bottom {
    padding: 15px 0 10px;
  }

  .d-479 {
    display: none;
  }

  .col.ec-category-block {
    margin-top: 0;
    margin-bottom: 15px;
  }

  .ec-category-menu .ec-category-toggle {
    width: 40px;
    min-height: 40px;
    padding: 0 13px;
  }

  .ec-header-search {
    width: 100%;
    padding: 0 15px !important;
  }

  .col.header-top-res {
    -webkit-box-flex: 1;
        -ms-flex: 1 0 0px;
            flex: 1 0 0;
  }

  .col.ec-header-logo {
    margin-bottom: 15px;
    margin-top: 2px;
  }

  .ec-header-call {
    margin-bottom: 15px;
  }
  .ec-header-call .ec-call-title {
    font-size: 12px;
  }
  .ec-header-call .ec-call-no {
    font-size: 12px;
  }

  .ec-side-cart {
    width: 290px;
  }
  .ec-side-cart .ec-cart-inner .ec-cart-title {
    margin-bottom: 15px;
  }

  .ec-side-cart.ec-mobile-menu {
    width: 290px;
  }

  .sidebar-dis-991 {
    width: 290px;
  }

  .eccart-pro-items li {
    margin-bottom: 15px;
    padding-bottom: 15px;
  }

  .ec-search-select-inner select {
    font-size: 14px;
  }

  .call_svg {
    width: 24px;
    height: 24px;
  }

  .ec-slide-content .ec-slide-stitle {
    font-size: 14px;
    margin-bottom: 5px;
  }
  .ec-slide-content p {
    display: none;
  }
  .ec-slide-content .ec-slide-title {
    font-size: 25px;
    letter-spacing: 1px;
  }
  .ec-slide-content .ec-slide-title span {
    font-size: 14px;
    letter-spacing: 0;
  }
  .ec-slide-content .btn {
    margin-top: 0;
    height: 24px;
    line-height: 24px;
    font-size: 10px;
    padding: 0 5px;
  }

  .ec_cat_inner {
    padding: 10px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }

  .ec-category-image {
    margin-bottom: 15px;
  }

  .ec-category-desc {
    padding: 0 !important;
  }

  .ec_ser_content.col-sm-12 {
    min-width: 194px;
  }

  .banner-block .banner-text .ec-banner-disc {
    font-size: 10px;
    margin-bottom: 3px;
    padding: 0px 8px;
  }
  .banner-block .banner-text .ec-banner-stitle {
    font-size: 14px;
    margin-bottom: 2px;
  }
  .banner-block .banner-text .ec-banner-title {
    font-size: 16px;
  }
  .banner-block .banner-content {
    padding: 20px 15px;
  }
  .banner-block .banner-content .ec-banner-btn a {
    font-size: 12px;
  }

  .ec-offer-content .ec-offer-title {
    font-size: 20px;
  }
  .ec-offer-content .ec-offer-stitle {
    font-size: 18px;
    margin-bottom: 4px;
  }
  .ec-offer-content .ec-offer-desc {
    display: none;
  }
  .ec-offer-content .ec-offer-btn a {
    font-size: 10px;
    height: 26px;
    line-height: 26px;
    margin-top: 8px;
  }

  .ec-pro-tab-nav .nav-item {
    width: auto;
  }
  .ec-pro-tab-nav .nav-item:not(:last-child) {
    margin: 0 15px 5px;
  }

  .ec-spe-pro-image-outer {
    width: 100%;
  }

  .ec-spe-pro-inner .ec-spe-pro-thumb {
    width: 40px;
  }
  .ec-spe-pro-inner .ec-spe-pro-cover {
    width: calc(100% - 55px);
  }

  .ec-subscribe-form .ec-email {
    font-size: 14px;
    padding-left: 10px;
    padding-right: 10px;
    margin-bottom: 15px;
  }

  .footer-news-title {
    font-size: 20px;
  }

  .ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link {
    font-size: 14px;
  }
  .ec-footer .footer-top .ec-footer-widget .ec-footer-links .ec-footer-link a {
    font-size: 14px;
    line-height: 20px;
  }

  .footer-bottom .ec-copy {
    font-size: 13px;
  }

  .modal-dialog {
    width: 90%;
  }

  .quickview-pro-content .ec-quick-title a {
    font-size: 18px;
    margin: 0 0 10px 0;
  }
  .quickview-pro-content .ec-quickview-rating {
    margin-bottom: 10px;
  }
  .quickview-pro-content .ec-quickview-qty .ec-quickview-cart .btn {
    margin: 0 10px;
    margin-right: 0;
    font-size: 14px;
  }

  #ec-popnews-box {
    padding: 20px;
  }
  #ec-popnews-box h1, #ec-popnews-box .h1 {
    font-size: 22px;
  }
  #ec-popnews-box button {
    font-size: 14px;
    height: 40px;
    line-height: 1;
  }
  #ec-popnews-box input {
    margin-bottom: 15px;
  }

  #ec-popnews-close {
    width: 20px;
    height: 20px;
    font-size: 12px;
  }
}
/*# sourceMappingURL=demo8.css.map */
    </style>

    <!-- User invoice section -->
    <section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-12 col-md-12">
                    <div class="ec-vendor-dashboard-card">
                        <div class="ec-vendor-card-header">
                            <h5>Invoice</h5>
                        </div>
                        <div class="ec-vendor-card-body padding-b-0">
                            <div class="page-content">
                                <div class="page-header text-blue-d2">
                                    <img src="{{ public_path('tlandingPage/assets/images/logo/cakrawala.png') }}"
                                        alt="Site Logo" width="50%">
                                </div>

                                <div class="container px-0">
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <hr class="row brc-default-l1 mx-n1 mb-4" />

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    {{-- <div class="my-2">
                                                        <span class="text-sm text-grey-m2 align-middle">Nama Pemesan :
                                                        </span>
                                                        <span
                                                            class="text-600 text-110 text-blue align-middle">{{$data['nama']}}</span>
                                                    </div> --}}
                                                    <div class="text-grey-m2">
                                                        <div class="my-2"><b class="text-600">Nama :
                                                        </b>{{$data['nama']}}
                                                    </div>
                                                    <div class="my-2"><b class="text-600">E-mail :
                                                            </b>{{$data['email']}}
                                                        </div>
                                                        <div class="my-2"><b class="text-600">Alamat :
                                                            </b>{{$data['alamat']}}
                                                        </div>
                                                        <div class="my-2"><b class="text-600">Nomor HP :
                                                            </b>{{$data['no_hp']}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->

                                                <div
                                                    class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                                    <hr class="d-sm-none" />
                                                    <div class="text-grey-m2">

                                                        <div class="my-2"><span class="text-600 text-90">Nomor
                                                            Invoice :
                                                        </span>{{$invoice}}</div>
                                                        <div class="my-2"><span
                                                                class="text-600 text-90">Tanggal Pemesanan :
                                                            </span> {{$tanggal}}</div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>

                                            <div class="mt-4">

                                                <div class="text-95 text-secondary-d3">
                                                    <div class="ec-vendor-card-table">
                                                        <table class="table ec-table">
                                                            <thead>
                                                                <tr>
                                                                    <td scope="col">ID</td>
                                                                    <td scope="col">Nama Produk</td>
                                                                    <td class="text-center" scope="col">Jumlah</td>
                                                                    <td class="text-center" scope="col">Harga</td>
                                                                    <td class="text-center" scope="col">Total</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ((array)$cart_data as $item)
                                                                    <tr>
                                                                        <td><span>{{$item['item_id']}}</span></td>
                                                                        <td><span>{{$item['nama_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['jumlah_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['harga_produk']}}</span></td>
                                                                        <td class="text-center"><span>{{$item['harga_produk']*$item['jumlah_produk']}}</span>
                                                                        </td>
                                                                    </tr>
                                                                    {{-- @endforeach --}}
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td class="border-none m-m15" colspan="3"><span
                                                                            class="note-text-color">Pemesanan dan
                                                                            Informasi pembelian akan langsung dikirimkan
                                                                            melalui Whatsapp dan Email</span>
                                                                    </td>
                                                                    <td class="border-color m-m15 text-center text-600 text-90"
                                                                        colspan="1">
                                                                        <h5><strong>Total</strong></h5>
                                                                    </td>
                                                                    <td
                                                                        class="border-color m-m15 text-center text-600 text-90">
                                                                        <h5>{{$item['harga_produk']*$item['jumlah_produk']}}</h5>
                                                                    </td>
                                                                    @endforeach
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
