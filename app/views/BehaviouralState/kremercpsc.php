<H2>State</H2>
<img src="/public/images/state.gif"><p>
Allow an object to alter its behavior when its internal state changes.  The object 
will appear to change its class.
<h3>Applicability</h3>
  <UL>
  <LI>Need to change an object's behavior when it changes its state
  <LI>Operations have large, multipart conditional statements that depend on the object's state
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Localizes state-specific behavior and partitions behavior for different states
  <LI>Makes state transitions explicit
  <LI>State objects can be shared if they have no intrinsic state (see <a href="flyweight.html">Flyweight</a>).
  </UL>
