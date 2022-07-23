<?php

namespace Bytic\MailTemplates\Utility;

use ByTIC\Html\Tags\Tag;

/**
 * @inspiration https://iconmonstr.com/
 */
class SocialIcons
{
    public static function facebook(): \ByTIC\Html\Tags\AbstractTag
    {
        return Tag::tag('img')->setAttribute('src', 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTkgMGgtMTRjLTIuNzYxIDAtNSAyLjIzOS01IDV2MTRjMCAyLjc2MSAyLjIzOSA1IDUgNWgxNGMyLjc2MiAwIDUtMi4yMzkgNS01di0xNGMwLTIuNzYxLTIuMjM4LTUtNS01em0tMyA3aC0xLjkyNGMtLjYxNSAwLTEuMDc2LjI1Mi0xLjA3Ni44ODl2MS4xMTFoM2wtLjIzOCAzaC0yLjc2MnY4aC0zdi04aC0ydi0zaDJ2LTEuOTIzYzAtMi4wMjIgMS4wNjQtMy4wNzcgMy40NjEtMy4wNzdoMi41Mzl2M3oiLz48L3N2Zz4=');
    }
    public static function instagram(): \ByTIC\Html\Tags\AbstractTag
    {
        return Tag::tag('img')->setAttribute('src', 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTUuMjMzIDUuNDg4Yy0uODQzLS4wMzgtMS4wOTctLjA0Ni0zLjIzMy0uMDQ2cy0yLjM4OS4wMDgtMy4yMzIuMDQ2Yy0yLjE3LjA5OS0zLjE4MSAxLjEyNy0zLjI3OSAzLjI3OS0uMDM5Ljg0NC0uMDQ4IDEuMDk3LS4wNDggMy4yMzNzLjAwOSAyLjM4OS4wNDcgMy4yMzNjLjA5OSAyLjE0OCAxLjEwNiAzLjE4IDMuMjc5IDMuMjc5Ljg0My4wMzggMS4wOTcuMDQ3IDMuMjMzLjA0NyAyLjEzNyAwIDIuMzktLjAwOCAzLjIzMy0uMDQ2IDIuMTctLjA5OSAzLjE4LTEuMTI5IDMuMjc5LTMuMjc5LjAzOC0uODQ0LjA0Ni0xLjA5Ny4wNDYtMy4yMzNzLS4wMDgtMi4zODktLjA0Ni0zLjIzMmMtLjA5OS0yLjE1My0xLjExMS0zLjE4Mi0zLjI3OS0zLjI4MXptLTMuMjMzIDEwLjYyYy0yLjI2OSAwLTQuMTA4LTEuODM5LTQuMTA4LTQuMTA4IDAtMi4yNjkgMS44NC00LjEwOCA0LjEwOC00LjEwOHM0LjEwOCAxLjgzOSA0LjEwOCA0LjEwOGMwIDIuMjY5LTEuODM5IDQuMTA4LTQuMTA4IDQuMTA4em00LjI3MS03LjQxOGMtLjUzIDAtLjk2LS40My0uOTYtLjk2cy40My0uOTYuOTYtLjk2Ljk2LjQzLjk2Ljk2LS40My45Ni0uOTYuOTZ6bS0xLjYwNCAzLjMxYzAgMS40NzMtMS4xOTQgMi42NjctMi42NjcgMi42NjdzLTIuNjY3LTEuMTk0LTIuNjY3LTIuNjY3YzAtMS40NzMgMS4xOTQtMi42NjcgMi42NjctMi42NjdzMi42NjcgMS4xOTQgMi42NjcgMi42Njd6bTQuMzMzLTEyaC0xNGMtMi43NjEgMC01IDIuMjM5LTUgNXYxNGMwIDIuNzYxIDIuMjM5IDUgNSA1aDE0YzIuNzYyIDAgNS0yLjIzOSA1LTV2LTE0YzAtMi43NjEtMi4yMzgtNS01LTV6bS45NTIgMTUuMjk4Yy0uMTMyIDIuOTA5LTEuNzUxIDQuNTIxLTQuNjUzIDQuNjU0LS44NTQuMDM5LTEuMTI2LjA0OC0zLjI5OS4wNDhzLTIuNDQ0LS4wMDktMy4yOTgtLjA0OGMtMi45MDgtLjEzMy00LjUyLTEuNzQ4LTQuNjU0LTQuNjU0LS4wMzktLjg1My0uMDQ4LTEuMTI1LS4wNDgtMy4yOTggMC0yLjE3Mi4wMDktMi40NDUuMDQ4LTMuMjk4LjEzNC0yLjkwOCAxLjc0OC00LjUyMSA0LjY1NC00LjY1My44NTQtLjA0IDEuMTI1LS4wNDkgMy4yOTgtLjA0OXMyLjQ0NS4wMDkgMy4yOTkuMDQ4YzIuOTA4LjEzMyA0LjUyMyAxLjc1MSA0LjY1MyA0LjY1My4wMzkuODU0LjA0OCAxLjEyNy4wNDggMy4yOTkgMCAyLjE3My0uMDA5IDIuNDQ1LS4wNDggMy4yOTh6Ii8+PC9zdmc+');
    }
    public static function twitter(): \ByTIC\Html\Tags\AbstractTag
    {
        return Tag::tag('img')->setAttribute('src', 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTkgMGgtMTRjLTIuNzYxIDAtNSAyLjIzOS01IDV2MTRjMCAyLjc2MSAyLjIzOSA1IDUgNWgxNGMyLjc2MiAwIDUtMi4yMzkgNS01di0xNGMwLTIuNzYxLTIuMjM4LTUtNS01em0tLjEzOSA5LjIzN2MuMjA5IDQuNjE3LTMuMjM0IDkuNzY1LTkuMzMgOS43NjUtMS44NTQgMC0zLjU3OS0uNTQzLTUuMDMyLTEuNDc1IDEuNzQyLjIwNSAzLjQ4LS4yNzggNC44Ni0xLjM1OS0xLjQzNy0uMDI3LTIuNjQ5LS45NzYtMy4wNjYtMi4yOC41MTUuMDk4IDEuMDIxLjA2OSAxLjQ4Mi0uMDU2LTEuNTc5LS4zMTctMi42NjgtMS43MzktMi42MzMtMy4yNi40NDIuMjQ2Ljk0OS4zOTQgMS40ODYuNDExLTEuNDYxLS45NzctMS44NzUtMi45MDctMS4wMTYtNC4zODMgMS42MTkgMS45ODYgNC4wMzggMy4yOTMgNi43NjYgMy40My0uNDc5LTIuMDUzIDEuMDgtNC4wMyAzLjE5OS00LjAzLjk0MyAwIDEuNzk3LjM5OCAyLjM5NSAxLjAzNy43NDgtLjE0NyAxLjQ1MS0uNDIgMi4wODYtLjc5Ni0uMjQ2Ljc2Ny0uNzY2IDEuNDEtMS40NDMgMS44MTYuNjY0LS4wOCAxLjI5Ny0uMjU2IDEuODg1LS41MTctLjQzOS42NTYtLjk5NiAxLjIzNC0xLjYzOSAxLjY5N3oiLz48L3N2Zz4=');
    }
    public static function network(string $socialNetwork)
    {
        return call_user_func(self::class . '::' . $socialNetwork);
    }
}