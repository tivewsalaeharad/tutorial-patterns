<H2>Decorator</H2>
<img src="/public/images/decorator.gif"><p>
Attach additional responsibilities to an object dynamically.  Decorators provide a
flexible alternative to subclassing for extended functionality.
<h3>Applicability</h3>
  <UL>
  <LI>Need to add responsibilities to objects dynamically and transparently.
  <LI>Need to withdraw responsibilities
  <LI>Need to support large combinations of responsibilities without a class explosion.
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>More flexible than static inheritance
  <LI>Avoids feature-laden classes high up in the hierarchy
  <LI>A decorator and its comonent aren't identical
  <LI>Lots of little objects!
  </UL>
