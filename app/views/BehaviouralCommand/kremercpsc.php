<H2>Command</H2>
<img src="/public/images/command.gif"><p>
Encapsulate a request as an object, thereby letting you parameterize clients with
different requests, queue or log requests, and support undoable operations.
<h3>Applicability</h3>
  <UL>
  <LI>Need to replace callbacks by an object-oriented form
  <LI>Need to specify, queue, and execute requests at different times.
  <LI>Need to support undo
  <LI>Need to support logging chains
  <LI>Need to structure a system around high-level operations built on primitive operations
  </UL>
<h3>Consequences</h3>
  <UL>
  <LI>Decouples the object that invokes the operation from the one that knows how to
      perform it.
  <LI>Commands become first-class objects
  <LI>Commands can be assembled into composite commands
  <LI>Easy to add new commands
  </UL>
