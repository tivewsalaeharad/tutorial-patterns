<H2>Prototype</H2>
<img src="/public/images/prototype.gif"><br>
Specify the kinds of objects to create using a prototypical instance, and create new
object by copying this prototype.
<h3>Applicability</h3>
  <UL>
  <LI>Need to specify classes to instantiate <em>at run time</em>
  <LI>Need to avoid building parallel class hierarchies for factories and products
  <LI>When instances of a class can have only a few different combinations of state
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Hides concrete classes from the client
  <LI>Allows adding and removing products at run-time
  <LI>Allows specifying new object "types" by varying values or structure
  <LI>Can reduce subclassing
  <LI>Dynamic configuation of an application's classes
  </UL>
