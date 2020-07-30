<H2>Bridge</H2>
<img src="/public/images/bridge.gif"><p>
Decouple an abstraction from its implementation so that the two can vary independently.
(Closely related to the object form of the <a href="adapter.html">Adaper pattern</a>.)
<h3>Applicability</h3>
  <UL>
  <LI>Need to avoid a permanent binding between an abstraction (<b>type!</b>) and its
      implementation
  <LI>Both abstractions and implementation should be extensible through subclassing
  <LI>Need to isolate changes in implementations from clients
  <LI>Need to <em>completely</em> (.h files) hide implementation from clients
  <LI>Need to split objects because of prolifereation of classes ("nested generalizations")
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Decouples interface and implementation
  <LI>Improves extensibility
  <LI>Hides implementation details from clients
  </UL>
