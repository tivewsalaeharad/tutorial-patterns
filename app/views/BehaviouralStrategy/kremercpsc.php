<H2>Strategy</H2>
<img src="/public/images/strategy.gif"><p>
Define a family of algorithms, encapsulate each one, and make them interchangeable.
Strategy lets the algorithms vary independently from clients that use it.
<h3>Applicability</h3>
  <UL>
  <LI>Need many related classes that differ only in their behavior
  <LI>Need different variants of an algorithm
  <LI>Need to hide algorithm data from the clients
  <LI>A class defines many behaviors and these appear as multiple conditional statements in its operations.
      (See also <a href="state.html">State</a>.)
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Families of related algorithms
  <LI>An alternative to subclassing the Context
  <LI>Strategies eliminate conditional statements
  <LI>Allow choice of implementation
  <LI>Clients must be aware of different strategies
  <LI>Communication overhead between Strategy and Context may be high
  <LI>Increased number of objects
  </UL>
