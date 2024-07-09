
![Greet_Keychan](https://storage.googleapis.com/wcorp_public/waifulab/preview/6773cc5932aa695d3ba08e670ecb458b1659886226.png) 
# Keychan 
descriptive &amp; human-readable hex ID | TAG Generator.
solves  the problem of generating ID that can be referred to / or remembered by human. this helps in handling / identifying entities.
<br>
- i.e Order "9779orderPSEu" can be conveyed on call as "please check PSEu"

---

# Override 🔥🔥🔥
> with length of 4,it can generate upto **14,776,336** per day, till 2099

Understood! Here are the possibilities for the function `generateCaseSensitiveHex`:

1. **Default (4 characters):**
   ```
   62^4 = 14,776,336
   ```
   This means you can generate up to 14,776,336 unique keys with 4 characters.

2. **6 characters:**
   ```
   62^6 = 56,800,235,584
   ```
   With 6 characters, you can generate up to 56,800,235,584 unique keys.

3. **8 characters:**
   ```
   62^8 = 218,340,105,584,896
   ```
   For 8 characters, the number of unique keys increases to 218,340,105,584,896.

4. **10 characters:**
   ```
   62^{10} = 8,631,762,020,291,600
   ```
   Finally, with 10 characters, you can generate up to 8,631,762,020,291,600 unique keys.


# Installation

```sh
composer install laxit/keychan
```
 
# Usage

```php
$tag = Laxit\Keychan\Tag::generate('order') // 9779orderPSEu
$date = Laxit\Keychan\Tag::date() // 9779
$longTag = Laxit\Keychan\Tag::generate('order',6) // "9779orderseNDF9"
```

# Considerations

- we're planning to add separators but this can add two unneccary space

