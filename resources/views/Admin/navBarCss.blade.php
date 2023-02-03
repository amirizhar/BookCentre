<style>
    body {
        font-family: "Times New Roman";
    }

    .header-image {
        max-width: 100%;
        height: auto
    }

    .header-display-middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
    }

    .header-margin-top {
        margin-top: 16px !important
    }

    .header-center {
        text-align: center !important
    }

    .header-content {
        margin-left: auto;
        margin-right: auto
    }

    .header-wide {
        letter-spacing: 4px
    }

    .header-container {
        position: relative
    }

    .header-xxlarge {
        font-size: 36px !important
    }

    .header-text-color {
        color: #fff !important
    }

    .header-text-light-grey {
        color: #f1f1f1 !important
    }

    .header-padding {
        padding: 8px 16px !important
    }

    .header-black {
        color: #fff !important;
        background-color: #000 !important
    }

    .header-white {
        color: #000 !important;
        background-color: #fff !important
    }

    .header-opacity-min {
        opacity: 0.75
    }

    .header-hide-small {
        display: none !important
    }

    .header-top {
        position: fixed;
        width: 100%;
        z-index: 1;
        top: 0
    }

    .header-right {
        float: right !important
    }


    .header-card {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)
    }

    .header-bar {
        width: 100%;
        overflow: hidden
    }

    .header-center .header-bar {
        display: inline-block;
        width: auto
    }

    .header-bar .header-bar-item {
        padding: 8px 16px;
        float: left;
        width: auto;
        border: none;
        display: block;
        outline: 0
    }

    .header-bar {
        position: static;
        float: left
    }

    .header-bar .header-button {
        white-space: normal
    }

    .header-bar-item {
        width: 100%;
        display: block;
        padding: 8px 16px;
        text-align: left;
        border: none;
        white-space: normal;
        float: none;
        outline: 0
    }

    .header-button {
        border: none;
        display: inline-block;
        padding: 8px 16px;
        vertical-align: middle;
        overflow: hidden;
        text-decoration: none;
        color: inherit;
        background-color: inherit;
        text-align: center;
        cursor: pointer;
        white-space: nowrap
    }

    .header-button {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .header-button {
        width: 100%;
        text-align: left;
        padding: 8px 16px
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        color: black;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        background-color: DEFF33;
    }

    li {
        float: right;
    }

    .dropbtn {
        display: inline-block;
        color: A9FF33;
        text-align: center;
        padding: 10px 20px;
        text-decoration: none;
    }


    .dropdown-content {
        display: none;
        position: absolute;
        background-color: 7EFF33;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    < !--------------------------------------------->ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        color: black;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        background-color: DEFF33;
    }

    li {
        float: right;
    }

    li a,
    .dropbtn {
        display: inline-block;
        color: black;
        text-align: center;
        padding: 10px 20px;
        text-decoration: none;
    }

    li a:hover,
    .dropdown:hover .dropbtn {
        background-color: 7EFF33;
    }

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: 7EFF33;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: center;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>