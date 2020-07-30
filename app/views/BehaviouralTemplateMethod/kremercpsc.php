<H2>Template Method</H2>
<img src="/public/images/templateMethod.gif"><p>
Define the skeleton of an algorithm in an operation, deferring some steps to
subclasses.  Template Method lets subclasses redefine certain steps of an algorithm 
without changing the alorithm's structure.
<h3>Applicability</h3>
  <UL>
  <LI>Need to implement the invariant parts of an algorithm, but leave some details to subclasses
  <LI>Need to factor out common behavior in groups of subclasses
  <LI>Need to control subclass extensions
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Fundamental technique for code reuse
  <LI>Often called <em>hooks</em>
  <LI>Template methods may be optional or required
  </UL>
