// Common Squirrel code.

// Helper for easy access of GCCG functions.
//
// Usage: gccg.Msg("Hello World!")
//
// Be careful about prefixing variables with '::'
// as it's easy to recursively invoke _get.
class GCCG {
    function _get(name)
    {
        return function(...):(name)
        {
            local arr = [::getroottable(), name]
            for (local i = 0; i < vargc; i++)
            {
                arr.append(vargv[i])
            }
            return ::call_gccg.acall(arr)
        }
    }
    // Prevent the most obvious errors.

    // This handler may not necessarily work,
    // another error could be given, but it
    // acts as a fail-safe.
    function _set(name, value)
    {
        throw "Cannot set GCCG functions.";
    }

    // These two don't work with classes anyway,
    // but it's good to be certain.
    function _newslot(name, value)
    {
        throw "Cannot create new GCCG slots.";
    }
    function _delslot(name)
    {
        throw "Cannot delete GCCG slots.";
    }
}
gccg <- GCCG()

// vim:ft=squirrel
