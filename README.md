# Example setup with DDEV, TailwindCSS & Vite.js

## Start DDEV

- run `ddev config` 
- `cp .env.example .env` and update the credentials based on `ddev describe`


## Install Craft

- Install php packages: `ddev ssh` and `composer install`
- Generate Security key: `./craft setup/security-key`
- Generate App ID: `./craft setup/app-id`
- Install Craft CMS
- Update the $BASE_URL .env variable to match your DDEV url.
- Create a homepage entry, using the `__HOME__` slug

## Test HMR

- Install node dependencies: `npm i`
- Start vite: `npm run dev`
- Refresh your browser to make sure you have the HMR in session
- Try making a change to your `app.css` and see if HMR is working
- Try making a change to your `app.js` and see if HMR is working


Big shout out to [@nystudio107](https://twitter.com/nystudio107) for making the [Craft CMS Vite plugin](https://nystudio107.com/docs/vite/) and [@johndwells](https://twitter.com/johndwells) for coming up with the solution to expose the ports in DDEV.
