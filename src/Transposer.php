<?php

namespace Musician;

/**
 * Transposer
 */
class Transposer
{
    const NOTES = [ 'C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#', 'A', 'A#', 'B' ];

    public static function transpose($key)
    {
        return 'C D E F G A B';
    }
}
