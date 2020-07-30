<H2>Mediator</H2>
<img src="/public/images/mediator.gif"><p>
Define an object that encapsulates how a set of objects interact.  Mediator promotes
loose coupling by keeping objects from referring to each other explicitly, and it 
lets you vary their interaction independently.
<h3>Applicability</h3>
  <UL>
  <LI>Complex interaction exists, and you don't what to bury the interaction in the objects
  <LI>Reuse is difficult due to communciation paths
  <LI>Distributed behavior should be customizable without a lot of subclassing
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Limits subclassing
  <LI>Decouples colleagues
  <LI>Simplifies object protocols
  <LI>Abstracts how objects cooperate
  <LI>Centralizes control
  </UL>
