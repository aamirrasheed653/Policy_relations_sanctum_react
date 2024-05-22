import * as React from "react";

import { createBrowserRouter } from "react-router-dom";

import Authors from "../views/author";
import Books from "../views/book";

const router = createBrowserRouter([
    {
        path: "/",
        element: <Authors />,
    },
    {
        path: "/books",
        element: <Books />,
    },
]);
export default router;
