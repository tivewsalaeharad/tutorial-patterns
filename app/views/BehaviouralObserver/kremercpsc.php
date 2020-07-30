<H2>Observer</H2>
<img src="/public/images/observer.gif"><p>
Define a one-to-many dependency between objects so that when one object
changes state, all its dependents are notified and updated automatically.
<h3>Applicability</h3>
  <UL>
  <LI>Need to change other objects when one object changes state, but the
      other objects aren't necessarily known to the one object
  <LI>Need to avoid tightly coupling an object with its observers
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Abstract coupling between Subject and Observer
  <LI>Support for broadcast communciation
  <LI>Unexpected updates can be a significant performance hit
  </UL>
