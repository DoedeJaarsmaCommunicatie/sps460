export const env = process.env.NODE_ENV;
export const baseUri = env === 'production' ? 'https://spaarndammerstraat460.nl' : 'https://spaarndammerstraat460.lndo.site';
export const subscribeUri = env === 'production' ? 'https://aanmelden.spaarndammerstraat460.nl' : 'https://sps460-kbg.lndo.site';
