# Collective Action API

First pass at an API, based on API-Platform, of the CA Objects in the MySQL database.

## Process

In our fork of ca, run

```
bin/console app:create-classes
```

This creates the entities (including repositories).

Those can be wired automatically for api platform.  However, this leads to lots of classes that are very specific to the CA MySQL schema.

So beyond a proof of concept, this was abandoned and moved to VoxiTour, with a focus on the profiles rather than existing data.



