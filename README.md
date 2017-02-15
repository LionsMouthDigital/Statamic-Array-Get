# Array Get
Get values from an array.


## Usage
Use the modifier to get a value from an array.

- Pass no param (within a loop) to grab the same index as the loop or
- pass a key as a parameter to grab its value from the array.


**Example (loopin'):**  
```html
---
colors:
  - red
  - blue
  - green
---

{{ collection:blog }}
  <h1 class="text-{{ colors | array_get }}">{{ title }}</h1>
{{ /collection:blog }}
```

**Example (pullin'):**  
```html
---
message_colors:
  warn: orange
  error: red
  info: blue
messages:
  -
    level: warn
    text: Be careful.
  -
    level: info
    text: Did you know?
  -
    level: error
    text: Oh no!
---

{{ messages }}
  <h1 class="text-{{ message_colors | array_get:level }}">{{ title }}</h1>
{{ /messages }}
```
