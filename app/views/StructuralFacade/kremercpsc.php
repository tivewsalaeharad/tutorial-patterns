<H2>Facade</H2>
<img src="/public/images/facade.gif"><p>
Provide a unified interface to a set of interfaces in a subsystem.  Facade defines a
higher-level interface that makes the subsystem easier to use.
<h3>Applicability</h3>
  <UL>
  <LI>Need to provide a simple interface to a complex system
  <LI>Need to decouple a subsystem from its clients
  <LI>Need to provide an interface to a software layer
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Shields clients from subsystem components
  <LI>Promotes weak coupling between the subsystem and its clients
  <LI>Facade doesn't prevent clients from using subsystem classes if they need to
  </UL>
